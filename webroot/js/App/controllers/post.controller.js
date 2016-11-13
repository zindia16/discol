angular.module('App').controller('Post',[
    '$scope','$localStorage','$timeout','$mdToast','PostsService','$routeParams',
    function($scope,$localStorage,$timeout,$mdToast,PostsService,$routeParams){


		$scope.notify = function(msg){
			$mdToast.show(
		      $mdToast.simple()
			  	.parent(document.querySelectorAll('#toaster'))
		        .textContent(msg)
				.position('top left')
		        .hideDelay(3000)
		    );
		};


		$scope.getPost = function(){
			if($routeParams.id){
				PostsService.getPost($routeParams.id,function(res){
					console.log(res);
					$scope.post = res.content;
				},function(err){});
			}
		};

		$scope.getPost();


		$scope.addComment = function(post){
			var comment ={};
			comment.contentId = post.id;
			comment.text = post.newComment;
			comment.is_published = 1;
			PostsService.addComment(comment,function(res){
				$scope.notify('Your new comment has been added!!!');
				post.newComment='';
				$scope.getPost();
			},function(err){});
		};
    }
]);
