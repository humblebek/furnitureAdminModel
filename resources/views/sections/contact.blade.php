<div class="contact_section layout_padding">
    <div class="container">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="mail_section_1">
                        <h1 class="contact_taital">Contact Us</h1>
                        <form action="{{route('admin.contact.store')}}" method="post">
                            @csrf
                            <input type="text" class="mail_text" placeholder="name" name="name">
                            <input type="text" class="mail_text" placeholder="email" name="email">
                            <input type="number" class="mail_text" placeholder="phone" name="phone">
                            <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message"></textarea>
                            <button class="send_bt" type="submit">SEND</button>
                        </form>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map_main">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                                width="600" height="360" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
