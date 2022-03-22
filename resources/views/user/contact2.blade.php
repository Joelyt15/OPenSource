    <div class="col-lg-6">
    <form action="{{ url('message') }}" method="POST" enctype="multipart/form-data">
        @csrf
            <fieldset>
            <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
            </fieldset>
            <fieldset>
            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
            </fieldset>
            <fieldset>
            <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
            </fieldset>
        </div>
        <div class="col-lg-6">
            <fieldset>
            <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
            </fieldset>
        </div>
        <div class="col-lg-12">
            <fieldset>
            
                <input style="background-color:cadetblue;" type="submit" class="btn btn-success">

            </fieldset>
    </form> 
  </div>