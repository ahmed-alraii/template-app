function confirmDelete(title, message, yes, no, myForm) {
    alertify
        .confirm(
            title,
            message,
            function () {
                myForm.form.submit();
            },
            function () {}
        )
        .set("labels", { ok: yes, cancel: no });
}
