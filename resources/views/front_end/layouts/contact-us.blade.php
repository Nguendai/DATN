<div id="tiishop_contact-us">
    <div id="contact-us-nav">
        <a href="#" class="__click m-font"><i class="fa fa-question-circle-o mr-5 fz-16"></i><span>Hỗ trợ</span> </a>
    </div>
    <div id="contact-us-main">
        <div class="panel-heading clearfix __close text-center"><span class="fz-16 mt-5">Để lại lời nhắn</span><a href="" class="pull-right"><i class="fa fa-times-rectangle fz-16"></i></a></div>
        @if(Auth::guest())
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
        @else
        <div class="__inner-main clearfix">
            <div id="messages" style="width: 100%;height: 116px;">
                @foreach($messages as $data)
                <p id="{{$data->id}}">
                    <strong >{{$data->author}}
                    </strong>:{{$data->content}}
                </p>
                @endforeach
            </div>
            <hr>
            <!-- <form action="" method="post"> -->

               <div class="form-group">
                <p>Nội dung tin nhắn</p>
                <textarea name="content" id="content" cols="30" rows="1"  placeholder="Bạn cần trợ giúp gì?" class="form-control" required ></textarea>
            </div>
            <button id="send" class="btn btn-primary pull-right">GỬI</button>
            <!-- </form> -->
        </div>
        @section('script')
        <script  type="text/javascript">
            $(document).ready(function(){
                $('#send').click(function(){
                  var url = 'khachhang/send/{{Auth::user()->id}}';

                  var content = $('#content').val();
                  $.ajax({
                    url: url,
                    data: {
                      content:content,
                  },
                  dataType: 'text',
                  type:'POST',
                  success: function(response){
                    var data = JSON.parse(response);
                    $('#messages').append('<p><strong>'+data['author']+'</strong>:'+data['content']+'</p>');
                    $('#content').val('');
                }
            });
              });
            });
        </script>
        @endsection
        @endif
    </div>
</div>
