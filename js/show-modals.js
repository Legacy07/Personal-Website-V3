$(document).ready(function () {
    $('#suleymaniye-aid-project').on('click', function (e) {
        e.preventDefault();
        $('#suleymaniye-aid-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
});