$(function () {
    $("#comment-form").on("submit", function () {
        nome_input = $("input[name='comment-author']");
        email_input = $("input[name='comment-email']");
        data_input = $("input[name='comment-content']");

        if (nome_input.val() == "" || nome_input.val() == null) {
            $("#comment-author-erro").html("O autor é obrigatorio");
            return (false);
        }

        else if (email_input.val() == "" || email_input.val() == null) {
            $("#comment-email-error").html("O email é obrigatorio");
            return (false);
        }

        else if (data_input.val() == "" || data_input.val() == null) {
            $("#comment-content-error").html("O conteúdo é obrigatoria");
            return (false);
        }

        return (true);
    });
});
