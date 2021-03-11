$(document).ready(function () {
    $('#suleymaniye-aid-project').on('click', function (e) {
        e.preventDefault();
        $('#suleymaniye-aid-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });

    $('#suleymaniye-org-project').on('click', function (e) {
        e.preventDefault();
        $('#suleymaniye-org-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });

    $('#interview-revision-project').on('click', function (e) {
        e.preventDefault();
        $('#interview-revision-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });

    $('#password-generator-project').on('click', function (e) {
        e.preventDefault();
        $('#password-generator-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });

    $('#nextbook-project').on('click', function (e) {
        e.preventDefault();
        $('#nextbook-project-modal').modal('show').find('.modal-content').load($(this).attr('href'));
    });

    $('#previous-version-one').on('click', function (e) {
        e.preventDefault();

        var id = "previous-version-one-iframe";
        document.getElementById(id).src = "/previous-versions/version-1/index.html";
        hijacklinks(id);

        $('#previous-version-one-modal').modal('show');
    });

    $('#previous-version-two').on('click', function (e) {
        e.preventDefault();

        var id = "previous-version-two-iframe";
        document.getElementById(id).src = "/previous-versions/version-2/index.html";
        hijacklinks(id);

        $('#previous-version-two-modal').modal('show');
    });
});

function hijacklinks(id) {
    var iframe = document.getElementsByClassName(id);
    var as = iframe.contentDocument.getElementsByTagName('a');
    for (i = 0; i < as.length; i++) {
        as[i].setAttribute('target', '_self');
    }
}