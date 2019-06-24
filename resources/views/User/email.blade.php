<font face="Arial">
	<div>
		<h3><font color="#FF9600">Thông tin khách hàng</font></h3>
		<p>
			<strong class="info">Khách hàng: </strong>
			{{$info->user->name}}
		</p>
		<p>
			<strong class="info">Email: </strong>
			{{$info->user->email}}
		</p>
		<p>
			<strong class="info">Điện thoại: </strong>
			{{$info->user->phone}}
		</p>
		<p>
			<strong class="info">Địa chỉ: </strong>
			{{$info->user->address}}
		</p>
	</div>
	<div>
		<h3><font color="#FF9600">Hóa đơn mua hàng</font></h3>
		<table border="1" cellspacing="0" cellpadding="5px">
			<tr>
				<td><strong>Tên sản phẩm</strong></td>
				<td><strong>Giá</strong></td>
				<td><strong>Số lượng</strong></td>
				<td><strong>Thành tiền</strong></td>
			</tr>
			@foreach($cart as $ca)
			<tr>
				<td>{{$ca->name}}</td>
				<td>{{$ca->price}}$</td>
				<td>{{$ca->qty}}</td>
				<td>{{$ca->qty*$ca->price}}$</td>
			</tr>
			@endforeach
			<tr>
				<td>Tổng tiền:</td>
				<td colspan="3" align="right">{{Cart::total()}}$</td>
			</tr>
		</table>
	</div>
	<div>
		<h3><font color="#FF9600">Quý khách đã đặt hàng thành công!</font></h3>
		<p>+ Hóa đơn mua hàng của quý khách đã được chuyển đến địa chỉ Email có trong phần thông tin khách hàng của chúng tôi.</p>
		<p>+ Sản phẩm của quý khách sẽ được chuyển đến địa chỉ có trong phần thông tin khách hàng của chúng tôi sau thời gian từ 2 đến 3 ngày tính từ thời điểm này.</p>
		<p>+ Nhân viên giao hàng sẽ liên hệ với quý khách qua số điện thoại trước khi giao hàng 24 tiếng.</p>
		<p>+ Trụ sở chính: Phùng Khoang - Nam Từ Liêm - Hà Nội.</p>
		<p>+ Cảm ơn quý khách đã sử dụng sản phẩm công ty chúng tôi.</p>
		<p>+ Liên hệ: Giám đốc Công Ngọc - 0389965476.</p>
	</div>
	
</font>