/* 
  ./public/js/posts/index.js
    AJAX request
*/



let offset = 0;

// show olderPosts on click
  // on views/posts/index.php
document.getElementById('olderPosts').onclick = function(e) {

  e.preventDefault();
  
  const oldersContainer = document.createElement('div');
  offset += 10;

  axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
  
  axios.get(`?more=${offset}`)
  .then(function (response) {
    console.log(response);

    oldersContainer.innerHTML = response.data;
    document.getElementById('postsList').append(oldersContainer);

  })
  .catch(function (error) {
    console.log(error);
  })
  .then(function () {
    // always executed
  })

};
