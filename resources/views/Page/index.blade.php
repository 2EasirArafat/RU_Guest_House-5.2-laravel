@extends('layout')

@section('body-content')
 <!-- 	<img src="img/Slider2.jpg" class="img-responsive"> -->

  <!--
New experiment are here....
  -->

              <div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/Slider2.jpg" alt="" >
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/Slider3.jpg" alt="" >
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/Slider4.jpg" alt="" >
                                </div>

                                <div class="item">
                                    <img class="slide-image" src="img/Slider5.jpg" alt="" >
                                </div>
                               
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

              </div>
@endsection

@section('text-content')

	 <div class="row">
              <div class="col-lg-4 fbox">
                 <img src="img/1.png" width="100" height="100">
                <h3>Main Campus of RU </h3>
                  <p> The university's main campus is located in Motihar, on the eastern side of the city of Rajshahi and a mile from the river Padma. The campus area is nearly 753 acres (3.05 km2). Access to the walled-off university campus is controlled through three security gates. The campus houses eleven large academic buildings—five for the arts, business studies and social Science four for the sciences and two for agricultural studies.</p>
              </div>

              <div class="col-lg-4 fbox">
               <img src="img/2.jpg" width="200" height="100">
                <h3>Other Faculties </h3>
                  <p>A few miles from the main campus is the Verandra Recharge  Academy one of the richest repertory of Bengal sculptures in the world. Established in 1910 by Ramaprasad Chanda, the museum became a part of the university in 1960s when a financial crisis threatened its existence. Under the university, the museum has thrived, adding an folklore gallery to its impressive collection from ancient and medieval Bengal. </p>
              </div>

              <div class="col-lg-4 fbox">
              <img src="img/3.jpg" width="200" height="100">
                <h3>Architecture</h3>
                  <p>University of Rajshahi is home to many architectural and artistic landmarks, which area is about almost 304 hectors. The Shaheed Minar is an important example, complete with a mural designed by Murtaza Bashir. The Senate House is a modern mini-parliament house, has 206 rooms and fully air-condHitioned, usually used for meetings of the senate of the university, but it also accommodates national and international conferences, seminars and symposiam.</p>
              </div>
              <hr>

            </div>

@endsection


