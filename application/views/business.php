<!-- ======= Hero Section ======= -->
<section id="business" style="background-image:url('<?= base_url() ?>assets/images/our-business-header.png')" class="hero d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        
        <h1 style="color: white;text-align: right;">Our Bussiness</h1>
        <h2 style="color: white;text-align: right;">PT. SAGARA BERKAH MARINE</h2>
    </div>

</section>

<div  class="about section-bg">
    <div class="container-fluid my-5" data-aos="fade-up">

    <ul class="flex-container space-between">
            <li class="flex-item active" onclick="ourbusinessitem(this,'marinesupply')">MARINE <br> SUPPLY </li>
            <li class="flex-item" onclick="ourbusinessitem(this,'service')">SERVICE INSTALLATION</li>
            <li class="flex-item" onclick="ourbusinessitem(this,'repair')">REPAIR AND FABRICATION</li>
            <li class="flex-item" onclick="ourbusinessitem(this,'surveyor')">SURVEYOR AND CONSULTANT</li>
            <li class="flex-item" onclick="ourbusinessitem(this,'shipping')">SHIPPING <br> AGENCY</li>
        </ul>
        <br>
        <!-- <div class="flex-item active" onclick="ourbusinessitem(this,'marinesupply')">
            MARINE SUPPLY
        </div> -->
        <div id="marinesupply" style="display:block; " class="decontent">
            High quality with Safety Of Life At Sea (SOLAS) standard

            <ul>
                <li>Lashing equipment (Turn buckle, Tensioner, e.g., chain, ratchet,etc.)</li>
                <li>Deck (Pilot - Embarkation ladder, Tail rope, Mooring rope, etc.)</li>
                <li>Bunker, fresh water supply, etc.</li>
                <li>Cabin, Laundry equipment</li>
                <li>Marine Lubricant Oil – grease</li>
                <li>Electrical and machinery</li>
                <li>Navigation - Nautical equipment</li>
                <li>Life safety and firefighting equipment</li>
                <li>Charts/publication</li>
                <li>Chemical product for maintenance, water/oil treatment, cleaning,
                        pollution control.</li>
            </ul>    
            
            <div class="row justify-content-md-center">
                <?php foreach ( $gallery['a'] as $key => $gal ): ?>
                    <div class="col-sm-3 popup-gallery">
                        <a href="<?=base_url()?>/<?=$gal?>" >
                            <img style="width:100%"  src="<?=base_url()?>/<?=$gal?>" alt="">
                        </a>
                    </div>                    
                <?php endforeach ?>
            </div>    
        </div>


        <!-- <div class="flex-item" onclick="ourbusinessitem(this,'service')">
            SERVICE INSTALLATION
        </div> -->
        <div id="service" class="decontent">

            Engineering – Constructions - Mechanical

            <ul style="list-style-type: square;">
                <li>Under Water Survey/Inspection, UWILD, Cleaning, Polishing Propeller (Class Approval), Searching the sank of anchor/chain/grab bucket, repairs (welding/un welding), Salvage, etc.</li>
                <li>Generator/Electrical, Motor repair/rewind</li>
                <li>Survey - annual, Intermediate and Special periodical</li>
                <li>All kind of Test load, Thickness Measurement</li>
                <li>Calibration &ndash; Repair :</li>
                <li style="list-style-type: none;">
                <ul style="list-style-type: circle;">
                <li>Electrical : Ampere meter AC/DC, Clamp Meter, Voltmeter, Multi meter, etc.</li>
                <li>Temperature : Incubator, Oven, Furnace, Auto Clave, etc.</li>
                <li>Geodetic : Automatic Level, Theodolite, Total Station, etc.</li>
                <li>Pressure : Pressure Gauge, Pressure Recorder, Test Gauge, etc.</li>
                <li>Dimension : Dial Indicator, Vernier Caliper, Height Gauge, etc.</li>
                </ul>
                </li>
                <li>Navigation and communication :</li>
                </ul>
                <ul style="list-style-type: disc;">
                <li style="list-style-type: none;">
                <ul style="list-style-type: circle;">
                <li>Radar and ARPA System</li>
                <li>VDR System (Voyage Data Recorder)</li>
                <li>Gyro Compass and Magnetic Compass</li>
                <li>Auto Pilot</li>
                <li>Inmarsat &ndash; A, B, C, F, M</li>
                <li>VHF DSC, MF/HF DSC, SSB Radio Station</li>
                <li>GMDSS System - AIS / GPS / ECDIS / EPIRB / Telex / Navtex</li>
                <li>V-SAT &ndash; Broadband or Thuraya</li>
                </ul>
                </li>
                <li>Conduct annual servicing, inspection and maintenance of FFA and LSA equipment class BV/LR/NK :</li>
                </ul>
                <ul>
                <li style="list-style-type: none;">
                    <ul>
                        <li>Fire extinguishers, CO2 installations</li>
                        <li>Annual foam compound analysis for fixed foam firefighting installation</li>
                        <li>Annual services and maintenance of lifeboat, life raft and launching appliances</li>
                    </ul>
                </li>
            </ul>
            <div class="row justify-content-md-center">
                <?php foreach ( $gallery['b'] as $key => $gal ): ?>
                    <div class="col-sm-3 popup-gallery">
                        <a href="<?=base_url()?>/<?=$gal?>" >
                            <img style="width:100%"  src="<?=base_url()?>/<?=$gal?>" alt="">
                        </a>
                    </div>                    
                <?php endforeach ?>
            </div>    
        </div>


        <div id="repair" class="decontent"> 
            With highly experienced and full skilled technician/engineer in each section which will solve the problem on board
            <ul style="list-style-type: square;">
                <li>Engine Overhaul</li>
                <li>Electro Motor repair/rewind</li>
                <li>Trouble Shooting Electric</li>
                <li>Hull/under water</li>
                <li>Boiler</li>
                <li>Turbo</li>
                <li>Pump</li>
                <li>Crane</li>
                <li>Etc.</li>
            </ul>
            <div class="row justify-content-md-center">
                <?php foreach ( $gallery['c'] as $key => $gal ): ?>
                    <div class="col-sm-3 popup-gallery">
                        <a href="<?=base_url()?>/<?=$gal?>" >
                            <img style="width:100%"  src="<?=base_url()?>/<?=$gal?>" alt="">
                        </a>
                    </div>                    
                <?php endforeach ?>
            </div>     
        </div>
        <div id="surveyor" class="decontent">
            <p>The following are a brief outline of some of the various types of survey and consultancy work<br />undertaken:</p>
            <ul style="list-style-type: square;">
                <li>Draught Surveys</li>
                <li>On and Off Hire Surveys</li>
                <li>Hatch and Tank Cleanliness Surveys</li>
                <li>Bunker Surveys</li>
                <li>Ship&rsquo;s Condition Surveys and/or Pre-Purchase requirements</li>
                <li>Cargo Superintendence</li>
                <li>Lashing/Securing Surveys on General and Containerized Cargoes</li>
                <li>Underwater Hull Inspections and/or Cleaning Supervision</li>
                <li>Flag State Annual Safety Inspections</li>
            </ul>
            <div class="row justify-content-md-center">
                <?php foreach ( $gallery['d'] as $key => $gal ): ?>
                    <div class="col-sm-3 popup-gallery">
                        <a href="<?=base_url()?>/<?=$gal?>" >
                            <img style="width:100%"  src="<?=base_url()?>/<?=$gal?>" alt="">
                        </a>
                    </div>                    
                <?php endforeach ?>
            </div>    
        </div>

        <div id="shipping" class="decontent">
            <p>Agency service is one of PT. SAGARA BERKAH MARINE service consist of shipping agency for domestic and foreign ships, supported by our experienced personnel throughout Indonesia. We are growing and expanding our businesses in Indonesia by providing a full range of shipping agency for all types of vessels such as Tanker vessels, Container vessels, Bulk vessels, General cargo vessels, roll on – roll off (RORO) vessels and others.</p>
            <div class="row justify-content-md-center">
                <?php foreach ( $gallery['e'] as $key => $gal ): ?>
                    <div class="col-sm-3 popup-gallery">
                        <a href="<?=base_url()?>/<?=$gal?>" >
                            <img style="width:100%"  src="<?=base_url()?>/<?=$gal?>" alt="">
                        </a>
                    </div>                    
                <?php endforeach ?>
            </div>    
        </div>

    </div>
</div><!-- End Business Section -->
<!-- 
<hr style="border-right: 300px solid #ddbd0e;width: 100px;display: inline;border-top: 0px;border-bottom: 0px;">
&nbsp; <span style="color: #002060;">Supported by our experienced personnel throughout Indonesia</span>
<div class="my-5"></div>
<div>
    <img src="<?= base_url() ?>assets/images/imgfooter.png" style="width: 100%;" alt="">
</div>
<div class="my-5"></div> -->

<!-- ############################# -->

<script>
    $(document).ready(function() {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function(item) {
                    return '';
                    // item.el.attr('title') + '';
                }
            }
        });
    });
</script>

<script>
    function ourbusinessitem(id, idcontent){
        
        if(!$(id).hasClass("active")){
            $(".decontent").hide();
            $(".flex-item").removeClass("active")
            $(id).addClass("active");
            $("#"+idcontent).show();
        }          
    }

    
</script>