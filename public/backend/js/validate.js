$(document).ready(function() {
	$("#addParentForm").validate({
		rules: {
			phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			email: {
				required: true,
				email: true
			},
			password: "required",
			repassword: {
				required: true,
				equalTo: "#password",
			},
			father_name: "required",
			mother_name: "required",
			father_phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			mother_phone: {
				required: true,
				minlength: 10,
				maxlength: 10
			},
			father_job: "required",
			mother_job: "required",
			address: "required",
		},
		messages: {
			phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			email: {
				required: 'Chưa nhập email',
				email: 'Sai định dạng email'
			},
			password: "Chưa nhập mật khẩu",
			repassword: {
				required: "Chưa nhập mật khẩu",
				equalTo: "Mật khẩu không khớp",
			},
			father_name: "Chưa nhập tên bố",
			mother_name: "Chưa nhập tên bố",
			father_phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			mother_phone: {
				required: 'Chưa nhập số điện thoại',
				minlength: 'Số điện thoại gồm 10 số',
				maxlength: 'Số điện thoại gồm 10 số'
			},
			father_job: "Không được bỏ trống",
			mother_job:"Không được bỏ trống",
			address:"Không được bỏ trống",
		}
	});
	$("#formAddchildren").validate({
		rules: {
			name: "required",
			noisinh: "required",
			diachi: "required",
		},
		messages: {
			name: "Chưa nhập tên",
			noisinh: "Chưa nhập nơi sinh",
			diachi: "Chưa nhập địa chỉ",
		}
	});
	$("#formAddClass").validate({
		rules: {
			name: "required",
			age: {
				required:true,
				min:1,
				max:5,
			},
		},
		messages: {
			name: "Chưa nhập tên",
			age: {
				required:"Chưa nhập số tuổi",
				min:"Tuổi trong khoảng 1-5",
				max:"Tuổi trong khoảng 1-5",
			},
		}
	});
	$("#addNewsForm").validate({
		rules: {
			title: "required",
			description: "required",
			editor1: "required",
		},
		messages: {
			title: "Chưa nhập tiêu đề",
			description: "Chưa nhập mô tả",
			editor1: "Chưa nhập nội dung",
		}
	});
});