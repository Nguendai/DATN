<div id="tiishop_contact-us">
    <div id="contact-us-nav">
        <a href="" class="__click m-font"><i class="fa fa-question-circle-o mr-5 fz-16"></i><span>Hỗ trợ</span> </a>
    </div>
    <div id="contact-us-main">
        <div class="panel-heading clearfix __close text-center"><span class="fz-16 mt-5">Để lại lời nhắn</span><a href="" class="pull-right"><i class="fa fa-times-rectangle fz-16"></i></a></div>
        <div class="__inner-main clearfix">
            <form action="{!! url('contact-us') !!}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <p>Tên của bạn</p>
                    <input type="text" name="txtname" class="form-control" required placeholder="Tên của bạn" />
                </div>
                <div class="form-group">
                    <p>Email</p>
                    <input type="email" name="txtemail" class="form-control" placeholder="Email của bạn" required />
                </div>
                <div class="form-group">
                    <p>Nội dung tin nhắn</p>
                    <textarea name="txttext" id="" cols="30" rows="10"  placeholder="Bạn cần trợ giúp gì?" class="form-control" required ></textarea>
                </div>
                <button class="btn btn-primary pull-right">GỬI</button>
            </form>
        </div>
    </div>
</div>