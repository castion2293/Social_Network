$(document).ready(function(){
    var postId = 0;

    $('#edit').on('click', function(event) {
        event.preventDefault();

        var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
        postId = event.target.parentNode.parentNode.dataset['postid'];
        $('#post-body').val(postBody);

        $('#edit-modal').modal();
    })

    $('modal-save').on('click', function() {
        $.ajax({
            method: 'POST',
            url: url,
            data: { body: $('#post-body').val(), postId: postId, _token: token}
        });
        
    })
});