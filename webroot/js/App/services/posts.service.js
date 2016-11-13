angular.module('App').factory('PostsService',[
    '$http','$localStorage','urls',
    function($http,$localStorage,urls){
		var createPost = function(content,success,error){
			$http.post(urls.api+'Contents/add.json',content).success(function(res){
				success(res);
			}).error(function(res){
				error(res);
			});
		};

		var getPosts = function(callback){
			$http.get(urls.api+'Contents/index/post.json').success(function(res){
				callback(res);
			}).error(function(res){
				console.log(res);
			});
		};

		var getPost = function(postId,success,error){
			$http.get(urls.api+'Contents/view/'+postId+'/post.json').success(function(res){
				success(res);
			}).error(function(res){
				console.log(res);
			});
		};

		var addComment = function(comment,success,error){
			$http.post(urls.api+'Comments/add.json',comment).success(function(res){
				success(res);
			}).error(function(res){
				error(res);
			});
		};

		return {
			createPost : createPost,
			getPosts : getPosts,
			getPost : getPost,
			addComment: addComment
		};
    }

]);
