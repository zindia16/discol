<md-content class="md-padding" layout-xs="column" layout="row">
	<div flex-xs flex-gt-xs="50" layout="column">
		<md-card ng-repeat="post in posts" ng-if="$index%2===1">
			<md-card-header>
				<md-card-avatar>
					<img class="md-user-avatar" src="img/user.png"/>
				</md-card-avatar>
				<md-card-header-text>
					<span class="md-title">
						{{post.user.first_name}} {{post.user.last_name}}
						<a ng-if="post.content_type=='post'" href="#/post/view/{{post.id}}" class="right btn-floating blue" tooltipped data-position="bottom" data-delay="50" data-tooltip="Click to open this post"><i class="material-icons">send</i></a>
					</span>
					<span class="md-subhead" style="margin-top:-18px">{{post.created | date: 'medium'}}</span>

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
					<a href="javascript:void(0)" ng-click="post.showCommentForm=!post.showCommentForm" class="waves-effect waves-blue"><i class="material-icons left">comment</i>{{post.comment_count}}</a>
					<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">share</i>{{post.share_count}}</a>
					<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">favorite</i>{{post.like_count}}</a>
				</div>
			</md-card-actions>

			<md-card-content ng-show="post.showCommentForm">
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
	<div flex-xs flex-gt-xs="50" layout="column">
		<md-card ng-repeat="post in posts" ng-if="$index%2===0">
			<md-card-header>
				<md-card-avatar>
					<img class="md-user-avatar" src="img/user.png"/>
				</md-card-avatar>
				<md-card-header-text>
					<span class="md-title">
						{{post.user.first_name}} {{post.user.last_name}}
						<a ng-if="post.content_type=='post'" href="#/post/view/{{post.id}}" class="right btn-floating blue" tooltipped data-position="bottom" data-delay="50" data-tooltip="Click to open this post"><i class="material-icons">send</i></a>
					</span>
					<span class="md-subhead" style="margin-top:-18px">{{post.created | date: 'medium'}}</span>

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
					<a href="javascript:void(0)" ng-click="post.showCommentForm=!post.showCommentForm" class="waves-effect waves-blue"><i class="material-icons left">comment</i>{{post.comment_count}}</a>
					<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">share</i>{{post.share_count}}</a>
					<a href="javascript:void(0)" class="waves-effect waves-blue"><i class="material-icons left">favorite</i>{{post.like_count}}</a>
				</div>
			</md-card-actions>

			<md-card-content ng-show="post.showCommentForm">
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
</md-content>
<!-- <pre>
	{{posts | json}}
</pre> -->
