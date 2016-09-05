/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var postId = 0;
var postBodyElement = null;
$('.post').find('.interaction').find('.edit').on('click' , function(event){
    
    event.preventDefault();
    postBodyElement = event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    
    $('#post-body').val(postBody);
   $('#edit-modal').modal();
});
$('#modal-save').on('click', function () {
   $.ajax({
      method: 'post',
      url: urlEdit,
      data: { body:$('#post-body').val(), postId: postId , _token: token}
   })
            .done(function(msg){
               $(postBodyElement).text(msg, ['new_body']);
               $('#edit-modal').modal('hide');
   });
});