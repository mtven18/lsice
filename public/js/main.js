$('#preview').click(function (event) {
    event.preventDefault(); 
    
	var $input = $("#img");
    var fd = new FormData;

    fd.append('img', $input.prop('files')[0]);

    $.ajax({
        url: '/task/preview',
        type: 'POST',
        data: fd,
        processData: false,
        contentType: false,
        success: function( res, textStatus, jqXHR ){
        	var a = '<table class="table table-bordered table-inverse table-condensed table-hover"><thead class="thead-inverse"><tr><th>Name</th><th>E-mail</th><th>Text</th><th>Status</th><th>Picture</th></tr></thead><tbody><tr><td id="name"></td><td id="email"></td><td id="text"></td><td>Not performed</td><td><img src="" alt="Image not found" class="picture"></td></tr></tbody></table>';
        	$('.diss').html(a);

        	var name = $('#name').val();
			var email = $('#email').val();
			var text = $('#text').val();

			$('.diss #name').html(name);
			$('.diss #email').html(email);
			$('.diss #text').html(text);

			$('.picture').attr('src', res);
        }
    });
})

function sort_task (event) {
	event.preventDefault();
	var link = $(this).attr('href');
	if(desc.checked){
		link += '&desc=1';
	}else{
		link += '&desc=0';
	}

	 window.location.href = link;
}

var ass = $('.a_sort');

for (var i = 0; i < ass.length; i++) {
	ass[i].addEventListener('click', sort_task);
};