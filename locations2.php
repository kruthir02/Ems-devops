<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ven-you</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content"><!--body content holder-->
            <div class="container">
                <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1>Venues</h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="data:image/jpeg;base64,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" class="img-responsive" width = 200%; height = 200%;>
                        </div>
                        <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Mantra - The Luxury</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="data:image/jpeg;base64,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" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE LUXURY WEDDING DESTINATION</h5><!--content title-->
                                                <p>
                                                This property is well equipped with facilities that redefine the comfort with elegance and efficiency. 
                                                It is an easily accessible venue.
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Located in a no traffic area in the middle of Bangalore, the venue is an impeccable location for weddings, engagements, and receptions. Mantra also 
                                                offers 10 air-conditioned rooms for your guests to have a comfortable stay with a starting price of Rs. 4000. 
                                                </p>

                                                <p>
                                                Go for MANTRA - The Luxury Wedding Destination 
                                                for an amazing wedding affair. MANTRA - The Luxury Wedding Destination, can accommodate up to 2500 guests and provides delicious food with a starting price 
                                                of Rs. 500. The brand also provides a DJ for entertainment.
                                                
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">Mantra - The Luxury</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            Sarjapur Main Road, Bangalore
                            </p>
                            <p class="definition"><!--content body-->
                            This sophisticated wedding venue is an impeccable place to host your big day ceremonies, pre-wedding and wedding functions, 
                            receptions, opulent gatherings, making it perfect for your special occasions. Offering hospitable staff along with classy arrangements, 
                            they make the perfect choice for your functions. 
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="https://images.trvl-media.com/hotels/39000000/38750000/38743800/38743707/c0abfa03.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium" class="img-responsive">
                        </div>
                        <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">White Nirvana</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="https://images.trvl-media.com/hotels/39000000/38750000/38743800/38743707/c0abfa03.jpg?impolicy=fcrop&w=1200&h=800&p=1&q=medium" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>SERENITY AND PEACE PERSONIFIED</h5><!--content title-->
                                                <p>
                                                A villa which combines the rustic vibe with classic luxury, The White Nirvana is the perfect getaway from the city.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p><ul>
                                                    <li>3 bedroom open air farmhouse (AC rooms) built over 25 acres of farm space</li>
                                                    <li>Private swimming pool with a wooden deck and bar setup</li>
                                                    <li>Pool deck with pool beds</li>
                                                    <li>Rustic yet modern villa</li>
                                                    <li>Open air living and dining space</li>
                                                    <li>Plug and Play Speakers</li>
                                                    <li>Food on request</li>
                                                    <li>Can accommodate 20-25 pax with extra bedding</li>
                                                </ul></p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">White Nirvana</h1><!--location title-->
                            <p class="location">Chikkaballapur</p><!--location secondary content-->
                            <p class="definition">
                            A villa which combines the rustic vibe with classic luxury, The White Nirvana is the perfect getaway from the city.
                            Sip wine while gazing at the hills, or enjoy a beer in our private pool, the choice is yours. 
                            The White Nirvana redefines luxury, giving you the finest taste of opulence. Features: Candle light dinners, barbeques, campfire
                            </p>
                            <hr class="customline3"><!--css modified horizontal line--> 
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="https://b.zmtcdn.com/data/pictures/6/18871246/2dd804e59e866233fa60c2940e1b71d7.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*" class="img-responsive">
                        </div>    
                        <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">Shakesbierre Brewpub and Kitchen</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="https://b.zmtcdn.com/data/pictures/6/18871246/2dd804e59e866233fa60c2940e1b71d7.jpg?fit=around|771.75:416.25&crop=771.75:416.25;*,*" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>REDEFINING DINING EXPERIENCES</h5><!--content title-->
                                                <p>
                                                This Place Is Known For its Karaoke Room, Good Music Beautiful Ambiance, Valet Service, 
                                                Vibrant Ambience, Service is Great and Fast, Rooftop Ambience
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                They are an open air dining space with excellent natural ventilation, with an additional open-to-sky rooftop as well. 
                                                So feel free to come over and enjoy the best of Food, Beverages and Craft brews that we are well known for! 
                                                The Shakesbierre team is always at your service!
                                                </p>

                                                <p>
                                                Shakesbierre Brewpub And Kitchen, Bangalore has different party areas, including a hall and a sky deck, where you can have different functions. 
                                                The hall at this venue is modest, with a capacity to hold a small to a medium-sized crowd, with stylish and trendy interiors and a cozy arrangement.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">Shakesbierre Brewpub and Kitchen</h1>
                            <p class="location">Brigade Road Level 5, Eva Mall, Bengaluru </p>
                            <p class="definition">Be it a private family dineout, a noisy friends get together, a gala party, a corporate event, 
                                a private karaoke party, or a casual get together, ShakesBierre has the perfect dining space for that!</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle = "modal" data-target = "#argyle">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>
			
            <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
            </div>

            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period1/2013/10/12/Photos/IMG_0924[1]--621x414.jpg" class = "img-responsive">
                        </div>
                        <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">The Ritz-Carlton</h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="https://images.livemint.com/rf/Image-621x414/LiveMint/Period1/2013/10/12/Photos/IMG_0924[1]--621x414.jpg" class = "img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>GET THE CELEBRITY TREATMENT WITH WORLD-CLASS SERVICES</h5>
                                                <p>
                                                Embracing the luxury of India’s historic palaces, this hotel offers a 5-star oasis in the heart of Bangalore.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                Located in Bangalore, close to UB City Mall, Commercial Street and Brigade Road, The Ritz - Carlton, Bangalore is a
                                                picturesque property with a 24-hour front desk and free Wi-Fi throughout the property. Filling the hotel’s entire fifth 
                                                floor, The Ritz-Carlton Spa, Bangalore offers luxury treatments drawing from Indian and Eastern healing traditions, a 
                                                salon and swimming pool. Twelve treatment rooms include a VIP suite and two express service rooms.
                                                </p>
                                                
                                                <p>
                                                The hotel features of an beautiful setting for dining experiences, with elegant restaurants and bars, namely:
                                                The Lantern – Modern Canton and Dim Sum House, Riwaz – Tradition of Fine Indian Cuisine, BANG - Rooftop, High Energy Bar, 
                                                The Market – World Kitchen, Ganache – Patisserie and Delicatessen at The Ritz-Carlton, Bangalore, The Lobby Lounge and the 
                                                Ritz-Carlton Bar.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subcontent col-md-8">
                            <h1 class="title">The Ritz-Carlton</h1>
                            <p class="location">99 Residency Road,Bangalore</p>
                            <p class="definition">The beauty of India’s jaali latticework lies in both its intricacy and overall design. The same can be said for The Ritz-Carlton, Bangalore,
                                                where details large and small create a 5-star retreat in Bengaluru's central business district. Elegant hotel accommodations fuse modern and 
                                                traditional touches, while dining offers a global culinary journey. A luxury spa highlights Eastern-inspired therapies; event spaces allow 
                                                imagination to run free.</p>
                            <hr class="customline3">   
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> 
                            </button>
                        </div>
                    </div>
                </section>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
			
            <div class="row"><!--location content -->
                <section>
                    <div class="container">
                        <div class="col-md-4"><!--image holder with 4 grid column-->
                            <img src="https://cache.marriott.com/marriottassets/marriott/NYCEB/nyceb-boardroom-0042-hor-clsc.jpg?interpolation=progressive-bilinear&downsize=1180px:*" class="img-responsive" width = 200%; height = 200%;>
                        </div>
                        <div class="modal fade" id="meetingroom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--location modal content-->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header"><!--modal header-->
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><!--close button on top-->
                                        <h4 class="modal-title" id="myModalLabel">PRIVATE MEETING ROOM </h4><!--modal title-->
                                    </div>
                                    <div class="row">
                                        <div class="modal-body"><!--modal content-->
                                            <div class="col-md-6"><!--image holder with 6 grid column-->
                                                <img src="https://cache.marriott.com/marriottassets/marriott/NYCEB/nyceb-boardroom-0042-hor-clsc.jpg?interpolation=progressive-bilinear&downsize=1180px:*" class="img-responsive">
                                            </div>
                                            <div class="modaltext1 col-md-6">
                                                <h5>THE PERFECT PRIVATE MEETING EXPERIENCE</h5><!--content title-->
                                                <p>
                                                The Falcon's Den in Bangalore offers you unmatched hospitality with a thoughtfully curated venue for your special occasion.
                                                </p>
                                            </div> 
                                            <div class="modaltext2 col-md-12">
                                                <p>
                                                With an extensive
                                                wine list available, AV capabilities for speeches and formalities and
                                                an adjoining lounge for pre or post event entertaining, the
                                                Conference Room is a unique and stylish choice.
                                                </p>

                                                <p>
                                                The Conference Room can accommodate upto 20 guests for meetings or conferences. Merlin Conference Room at The Falcons Den is best for events in M G Road Bangalore.
                                                </p>
                                                <p>
                                                It has best spaces to suit different occasions and celebrations. 
                                                You can get contact details, event packages, rental prices, reviews at our website. Go ahead and make an enquiry for your event booking now!
                                                </p>
                                            </div>
                                        </div><!--modal body-->
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                                    </div><!--modal footer-->
                                </div><!--modal content div-->
                            </div><!--modal dialog div-->
                        </div><!--modal div-->
                        <div class="subcontent col-md-8"><!--location non modal content -->
                            <h1 class="title">The Falcon's Den Meeting Room</h1><!--location title-->
                            <p class="location"><!--location secondary content-->
                            M G Road, Bangalore
                            </p>
                            <p class="definition"><!--content body-->
                            The Falcon's Den in Bangalore offers you unmatched hospitality with a thoughtfully curated venue for your special occasion.
                            They take pride in providing a venue so beautiful to behold and in taking care of their guests genuinely so that each event held 
                            there is an experience to cherish. The venue is spacious and clean and provides decor solutions to fit your custom themes. 
                            </p>
                            <hr class="customline3"><!--css modified horizontal line-->
                            <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#meetingroom"><!--button for modal trigger-->
                            More Details  <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span><!--glyphicon--> 
                            </button>
                        </div><!--subcontent div-->
                    </div><!--container div-->
                </section>
            </div><!--row div-->
            
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>