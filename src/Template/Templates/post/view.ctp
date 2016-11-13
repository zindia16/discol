<div flex-xs flex-gt-xs="80" layout="column">
	<md-card>
		<md-card-header>
			<md-card-avatar>
				<img class="md-user-avatar" src="img/user.png"/>
			</md-card-avatar>
			<md-card-header-text>
				<span class="md-title">
					{{post.user.first_name}} {{post.user.last_name}}
				</span>
				<span class="md-subhead">{{post.created | date: 'medium'}}</span>

			</md-card-header-text>
		</md-card-header>
		<img ng-src="img/background3.jpg" class="md-card-image" alt="Washed Out">
		<md-card-title>

		</md-card-title>
		<md-card-content>
			<p>
				{{post.text}}
			</p>
		</md-card-content>
		<md-card-actions layout="row" layout-align="end center">
			<div>
				<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">comment</i>{{post.comment_count}}</a>
				<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">share</i>{{post.share_count}}</a>
				<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">favorite</i>{{post.like_count}}</a>
			</div>
		</md-card-actions>
		<md-card-content>
			<md-list>
				<md-list-item class="md-3-line" ng-repeat="comment in post.comments">
					<img ng-src="img/user.png" class="md-avatar" alt="{{comment.user.first_name}}">
					<div class="md-list-item-text">
						<h3 style="margin-top:15px">{{comment.user.first_name}} {{comment.user.last_name}}</h3>
						<h4>{{comment.created | date}}</h4>
						<p>
							{{comment.text}}
							<br/>
							<a href="javascript:void(0)"  class="right red-text"><i class="material-icons">favorite</i> {{comment.like_count}}</a>
						</p>
					</div>

					<md-divider md-inset ng-if="!$last"></md-divider>
				</md-list-item>
			</md-list>
		</md-card-content>
		<md-card-content>
			<div class="input-field col s12" style="margin-top:-20px">
				<form>
					<textarea id="textarea{{post.id}}" class="materialize-textarea" ng-model="post.newComment"></textarea>
					<label for="textarea{{post.id}}">Your comment</label>
					<button type="button" ng-click="addComment(post)" ng-class="{disabled:!post.newComment}" class="btn blue right">Send <i class="material-icons right">send</i></button>
				</form>
			</div>
		</md-card-content>
	</md-card>
</div>

<!-- <pre>
	{{post | json}}
</pre> -->
