jQuery(document).ready(function() {
    $.ajax({
        url: "http://127.0.0.1:8000/api/user-list",
        type: "GET",
        // cache: true,
        success: function(response) {
            let users = response.data;
            let index = '';
            users.forEach(function(value) {
                $('#user-list').append("<tr>\
            							<td>" + value.id + "</td>\
            							<td>" + value.username + "</td>\
            							<td>" + value.phone + "</td>\
                                        <td>" + value.address + "</td>\
                                        <td>" + "<button type='button' onclick='productDelete(this);' class='btn btn-danger btn-sm'>Xoá</button>" + "</td>\
            							</tr>");
            })

        }

    });

});