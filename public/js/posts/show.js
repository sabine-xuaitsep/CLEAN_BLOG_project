/* 
  ./public/js/posts/index.js
    AJAX request
*/


// TODO: 
      // envoyer message succès à l'utilisateur
      // vérifier que le champ édité n'est pas vide
      

document.querySelectorAll('.editableField').forEach(function(editable) {

  // edit class="editable" on dbclick
  //  on views/posts/show.php
  editable.ondblclick = function(e) {

    e.preventDefault();

    // prevent fieldEdition() execution on dbclick
    //  if currently editing a field
    if (!this.classList.contains('edition')) {
      
      // add class="edition" 
      //  during field edition
      this.classList.add('edition');

      // initial content storage for later checks
      const initialContent = this.innerHTML;

      // switch in edition mode
      const editionField = document.createElement(this.dataset.editionfield);
      editionField.value = this.innerHTML;
      this.innerHTML = '';
      this.appendChild(editionField);
      editionField.focus();
      
      // run editFieldOfPost() when press 'Enter' onKeyDown
      //  not onKeyUp 
      //    => to avoid a space to appear which is not included in the AJAX request
      //    => (only on a textarea)
      editionField.onkeydown = (e) => {
        if(e.key === 'Enter') {
          e.preventDefault();
          editionField.onblur = (e) => {
            return;
          }
          editFieldOfPost();     
        }
      }

      editionField.onblur = (e) => {
        e.preventDefault();
        editFieldOfPost();    
      }
      
      function editFieldOfPost() {

        // check if initialContent is modified
        //  if no change: no AJAX request
        if (initialContent === editionField.value) {
          // switch to view mode
          editable.innerHTML = editionField.value;
          // remove class="edition" 
          editable.classList.remove('edition');
        } 

        else {

          // switch to view mode
          editable.innerHTML = editionField.value;

          // storage for AJAX request
          const postID = document.getElementById('postDetails').dataset.id;
          const field = editable.dataset.editedfield;
          const data = editable.innerHTML;
    
          axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
  
          axios.get(`?edit=${postID}&field=${field}&data=${data}`)
          .then(function (response) {
            
            // remove class="edition" 
            editable.classList.remove('edition');
  

            console.log(response);
      
          })
          .catch(function (error) {
            console.log(error);
          })
          .then(function () {
            // always executed
          });
        }
      }
    }
  };
});
