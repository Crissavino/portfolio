<div id="fh5co-consult">
    <div class="choose animate-box">
        <h2 class="text-center" style="margin-bottom: 40px">Hire Me!</h2>
        <form action="/contact-me" method="POST">
            @csrf
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" id="name" required name="name" class="form-control" placeholder="Your firstname">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" id="lastName" required name="lastName" class="form-control" placeholder="Your lastname">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="email" id="email" required name="email" class="form-control" placeholder="Your email address">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" id="subject" required name="subject" class="form-control" placeholder="Your subject of this message">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                        <textarea name="message" required id="message" cols="30" rows="10" class="form-control"
                                  placeholder="Write your message"></textarea>
                </div>
            </div>
            <div class="form-group text-center">
                <input type="submit" value="Send Message" class="btn btn-primary" style="padding: 20px 100px">
            </div>

        </form>
    </div>
</div>
