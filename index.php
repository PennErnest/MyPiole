<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPiole</title>
    <?php
        $root = "./";
    ?>
    <?php include("includes/headerlinks.php");?>
    <script src="<?=$root?>statics/js/index.js" defer></script>
</head>
<!-- aos vendor plugin  -->
<body>

<?php 
include("includes/header.php");
?>
<!--     ---------------------- Slider ------------------------     -->
    <div class="Container-Slider">

        <div class="Slider">
            <div class="Slider-Banners">
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
                <div class="Banner">
                    <div class="annotation">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam eius laborum sapiente
                        accusamus corporis maxime ipsum quae cumque laboriosamlibero similique omnis at officiis 
                        consequatur vel, tempora quo dolor quaerat.
                    </div>
                </div>
            </div>
            <div class="Slider-Controls">
                <div class="Buttons">
                    <span class="left bi-arrow-left"></span>
                    <span class="right bi-arrow-right"></span>
                </div>
                <div class="Dots">
                    <span class="On"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <div class="Search-PopUp">
            <form action="" method="get">
                <div class="Box Research">
                <div class="Controls">
                    <input type="text" name="SearchBar" id="SearchBar" required placeholder="Enter Location , Property , Landmark ...">
                    <div class="Search"><span class="icon bi-search"></span></div>
                </div>
                </div>
                <div class="Box Actions">
                <div class="Controls">
                    <select name="Actions" id="Actions" label="Actions">
                        <option value="All" select> All Actions</option>
                        <option value="Rent">Rent</option>
                        <option value="Sale">Sale</option>
                        <option value="Sold Out">Sold Out</option>
                    </select>
                </div>
                <div class="Controls">
                    <select name="Types" id="Types">
                        <option value="All">All Types</option>
                        <option value="Apartement">Apartment</option>
                        <option value="Business">Business</option>
                        <option value="House">House</option>
                        <option value="Luxury">Luxury</option>
                        <option value="Residential">Residential</option>
                        <option value="Restaurant">Restaurant</option>
                        <option value="Single Family">Single Family</option>
                        <option value="Villa">Villa</option>
                    </select>
                </div>
                <div class="Controls">
                    <select name="Cities" id="Cities">
                        <option value="All">All Cities</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campo Aero Chapultepec">Campo Aero Chapultepec</option>
                        <option value="Cuernavaca">Cuernavaca</option>
                        <option value="Estado de">Estado de</option>
                        <option value="Utah">Utah</option>
                    </select>
                </div>
                <div class="Controls">
                    <select name="Rooms" id="Rooms">
                        <option value="All">All Rooms</option>
                        <option value="Min">Min Rooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="Controls">
                    <select name="BedRooms" id="BedRooms">
                        <option value="All">All Bed Rooms</option>
                        <option value="Min">Min Bed Rooms</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="Controls">
                    <select name="Baths" id="Baths">
                        <option value="All">All Baths</option>
                        <option value="Min">Min Baths</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
                <div class="Controls" style="margin-top:14px">
                    <button type="submit">Submit</button>
                </div>
                </div>
            </form>
        </div>
    </div>
<!-- End Slider -->
<!--     ---------------------- Contents ------------------------     -->
    <div class="Container" id="Search-Result" style="display:none">
    </div><!-- Ajax Search Result  -->
    <div class="Container Popular-Locations Soft">
        <div class="title" >
            <h1>Popular Locations</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="card">
                <img class="illustration" src="./statics/images/g1.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Austin</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g2.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Chicago</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g3.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Dallas</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g4.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">New Jersey</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g5.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Oaklahoma</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g6.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Seattle</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
            <div class="card">
                <img class="illustration" src="./statics/images/g9.jpg"></img>
                <div class="overlay"></div>
                <div class="reference">
                    <span class="location"><a href="#">Los Angeles</a></span>
                    <span class="listing">2 Listings</span>
                </div>
            </div>
        </div>
    </div><!-- End Container - Popular Locations -->
    <div class="Container Our-Offers">
        <div class="title"  >
            <h1>What We Offer</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="left">
                  
                <h3 class="content-title">
                    We're Offering Unmatched Services
                </h3>
    
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas adipisci 
                enim placeat magni vero? Facilis, voluptas culpa! Et veritatis alias 
                accusantium deleniti, nihil placeat libero voluptatibus. Debitis deserunt 
                doloremque cupiditate!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Rem earum harum voluptatibus vel molestiae natus voluptatum cumque, dolor, 
                aliquid perferendis expedita quibusdam quas alias,
                 beatae rerum qui quaerat obcaecati. At?</p>
                  
                <div class="stats">
                    <div>
                        <span>2300</span>
                        <span>Clients</span>
                    </div>
                    <div>
                        <span>16</span>
                        <span>Awards</span>
                    </div>
                    <div>
                        <span>2536</span>
                        <span>Projects</span>
                    </div>
                </div>
            </div>
            <div class="right">
                <div>
                    <div class="icon"><span class="bi-laptop"></span></div>
                    <div class="hint"><a href="#">Fastest Service</a></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                </div>
                <div>
                    <div class="icon"><span class="bi-database"></span></div>
                    <div class="hint"><a href="#">Largest Real Estate</a></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                </div>
                <div>
                    <div class="icon"><span class="bi-lock"></span></div>
                    <div class="hint"><a href="#">Property Insurance</a></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                </div>
                <div>
                    <div class="icon"><span class="bi-code"></span></div>
                    <div class="hint"><a href="#">Doorstep Process</a></div>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>
                </div>
            </div>
        </div>
    </div><!-- End Container - Our Offers -->
    <div class="Container Properties-For-Sale Soft ">
        <div class="title"  >
            <h1>Properties For Sale</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="card">
                <figure>
                    <img src="./statics/images/g7.jpg" alt="">
                    <figcaption>
                        <h3><a href="">Luxury Penthouse </a></h3>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </a></h3>
                        <span class="price"> $ 1 000 000 / month </span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">3 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">3 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">1200 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-rent">For Rent</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="./statics/images/g8.jpg" alt="">
                    <figcaption>
                        <h3>Family House</h3>
                        <span class="price">$ 78 900</span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">7 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">3 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">900 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-sale">For Sale</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="./statics/images/g9.jpg" alt="">
                    <figcaption>
                        <h3>House Outdoor</h3>
                        <span class="price"> $ 67 900</span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">4 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">6 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">1 200 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-rent">For Rent</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="./statics/images/g10.jpg" alt="">
                    <figcaption>
                        <h3>Outdoor Villa Bahamas</h3>
                        <span class="price"></span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">3 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">3 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">1 600 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-rent">For Rent</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="./statics/images/g11.jpg" alt="">
                    <figcaption>
                        <h3>Appartment New York</h3>
                        <span class="price">$ 65 000</span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">3 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">3 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">2 300 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-rent">For Rent</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
            <div class="card">
                <figure>
                    <img src="./statics/images/g13.jpg" alt="">
                    <figcaption>
                        <h3>Flat Mannhatan</h3>
                        <span class="price">$ 53 000</span>
                        <div class="separator"></div>
                        <div class="infos">
                            <div class="Bed">
                                <span class="icon bi-house-dash"></span>
                                <span class="text">3 Rooms</span>
                            </div>
                            <div class="Bath">
                                <span class="icon bi-plus-lg"></span>
                                <span class="text">3 Baths</span>
                            </div>
                            <div class="Surface">
                                <span class="icon bi-window-split"></span>
                                <span class="text">7 300 sq ft</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <div class="annotations">
                    <span class="left for-rent">For Rent</span>
                    <span class="right open-house">Open House</span>
                </div>
            </div>
        </div>
    </div><!-- End Container - Properties For Sale -->
    <div class="Container Preferred-Choice">
        <div class="title"  >
            <h1>What Makes Us The Preferred Choice</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="left">
                <div class="Box">
                    <div class="icon">
                        <span class="fa fa-university"></span>
                    </div>
                    <div class="Hint">
                        Maximum Choices
                    </div>
                    <div class="Text">
                        Lorem ipsum dolor sit amet,Ea consequuntur.
                    </div>
                </div>
                <div class="Box">
                    <div class="icon">
                        <span class="fa fa-bath"></span>
                    </div>
                    <div class="Hint">
                        Buyers Trust Us
                    </div>
                    <div class="Text">
                        Lorem ipsum dolor sit amet,Ea consequuntur.
                    </div>
                </div>
                <div class="Box">
                    <div class="icon">
                        <span class="fa fa-cubes"></span>
                    </div>
                    <div class="Hint">
                        Seller Prefer Us
                    </div>
                    <div class="Text">
                        Lorem ipsum dolor sit amet,Ea consequuntur.
                    </div>
                </div>
                <div class="Box">
                    <div class="icon">
                        <span class="fa fa-hospital-o"></span>
                    </div>
                    <div class="Hint">
                        Expert guidance
                    </div>
                    <div class="Text">
                        Lorem ipsum dolor sit amet,Ea consequuntur.
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="Box">
                    <div class="h3">
                        What Makes Us
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum veritatis est laborum harum placeat eaque temporibus debitis distinctio natus? Mollitia dolor iste, illo praesentium numquam enim ea vitae a consequatur.
                    Quia corporis maxime, doloribus illo ex beatae repudiandae sapiente enim quasi eveniet libero impedit autem vero atque recusandae alias sequi dolor voluptatum? Rerum, nesciunt itaque? Odio, consectetur? Esse, repellat officia.
                    Sed, distinctio excepturi molestias tempore hic facilis quibusdam provident officiis omnis reprehenderit architecto laboriosam. Veritatis commodi alias fugiat autem. Repellat, accusamus placeat?
                    Quia, fuga placeat iusto ipsam blanditiis officia deleniti?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat autem rem quis cumque qui impedit nam harum nihil commodi error dolores libero deserunt aliquid, quasi eius ducimus consequuntur quaerat. Dolor?
                    Nemo mollitia ratione tempore hic rerum incidunt, tempora amet quam molestiae quo sunt fugiat. Laborum magni quibusdam, quas aliquid, numquam dolorem officia
                    ipsam quasi voluptas adipisci dolorum, maiores at fugit!</p>
                    </div>
            </div>
        </div>
    </div><!-- End Container - Preferred-Choice -->
    <div class="Container Happy-Clients Soft">
        <div class="title"  >
            <h1>Happy Clients</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="Box">
                <Blockquote>
                    <span class="icon fa fa-quote-left"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ullam esse exercitationem reprehenderit 
                    nobis sed aperiam doloribus nihil nam voluptas consectetur deserunt libero,
                    tempora incidunt vero? Porro magni perferendis natus?
                </Blockquote>
                <div class="annotation">
                    <p class="author">Henry Nicolas</p>
                    <p class="function">Engineer</p>
                </div> 
            </div>
            <div class="Box">
                <Blockquote>
                    <span class="icon fa fa-quote-left"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ullam esse exercitationem reprehenderit 
                    nobis sed aperiam doloribus nihil nam voluptas consectetur deserunt libero,
                    tempora incidunt vero? Porro magni perferendis natus?
                </Blockquote>
                <div class="annotation">
                    <p class="author">Mark Waugh</p>
                    <p class="function">Engineer</p>
                </div>
            </div>
            <div class="Box">
                <Blockquote>
                    <span class="icon fa fa-quote-left"></span>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia ullam esse exercitationem reprehenderit 
                    nobis sed aperiam doloribus nihil nam voluptas consectetur deserunt libero,
                    tempora incidunt vero? Porro magni perferendis natus?
                </Blockquote>
                <div class="annotation">
                    <p class="author">Serena Williams</p>
                    <p class="function">Engineer</p>
                </div>
            </div>
        </div>
    </div><!-- End Container - Happy Clients -->
    <div class="Container Resume-Stats">
        <div class="title"  >
            <h1>We Hare Here For You</h1>
            <div class="annotation">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus porro recusandae iste, aperiam ipsa accusamus nostrum quasi magnam libero quia repellendus esse cumque officiis a minima molestias consequuntur eligendi architecto.
            </div>
        </div>
        <div class="Content">
            <div class="Box">
                <div class="icon fa fa-map-marker "></div>
                <div class="stat">180+</div>
                <div class="designation">Poperty Locations</div>
            </div>
            <div class="Box">
                <div class="icon fa fa-users"></div>
                <div class="stat">100+</div>
                <div class="designation">Professional Agent</div>
            </div>
            <div class="Box">
                <div class="icon fa fa-building"></div>
                <div class="stat">250+</div>
                <div class="designation">Property for Sell</div>
            </div>
            <div class="Box">
                <div class="icon fa fa-home"></div>
                <div class="stat">3200+</div>
                <div class="designation">Property for Rent</div>
            </div>
        </div>
    </div><!-- End Container - Resume Stats -->
<!-- End Contents -->
<?php
include("includes/footer.php");
?>

</body>
</html>