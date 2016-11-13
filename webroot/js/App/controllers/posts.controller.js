angular.module('App').controller('Posts',[
    '$scope','$localStorage','$timeout','$mdToast','PostsService',
    function($scope,$localStorage,$timeout,$mdToast,PostsService){
		var refreshTime = function(){
			$timeout(function(){
				$scope.now = Date();
				refreshTime();
			},1000);
		};
		refreshTime();

		$scope.notify = function(msg){
			$mdToast.show(
		      $mdToast.simple()
			  	.parent(document.querySelectorAll('#toaster'))
		        .textContent(msg)
				.position('top left')
		        .hideDelay(3000)
		    );
		};


		$scope.getPosts = function(){
			PostsService.getPosts(function(res){
				$scope.posts = res.contents;
			},function(err){});
		};

		$scope.getPosts();

		$scope.createPost = function(){
			var content = $scope.content;
			content.post_type = 'post';
			PostsService.createPost(content,function(res){
				$scope.notify('Your new post has been published!!!');
				$scope.content.text='';
				$scope.getPosts();
				console.log(res);
			},function(err){
				console.log(err);
			});
		};

		$scope.addComment = function(post){
			var comment ={};
			comment.contentId = post.id;
			comment.text = post.newComment;
			comment.is_published = 1;
			PostsService.addComment(comment,function(res){
				$scope.notify('Your new comment has been added!!!');
				post.newComment='';
				post.comment_count +=1;
				post.showCommentForm=false;
			},function(err){});
		};
    }
]);
