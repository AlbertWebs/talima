<div id="right">

            
            <div class="well well-small">
                <ul class="list-unstyled">
                    <li>Admin &nbsp; : <span><?php $Admins = DB::table('admins')->get(); $Count = count($Admins); echo $Count ?></span></li>
                    <li>Students &nbsp; : <span><?php $Users = DB::table('users')->get(); $Count = count($Users); echo $Count ?></span></li>
                    <li>Bookings &nbsp; : <span><?php $Subscribers = DB::table('bookings')->where('status','0')->get(); $Count = count($Subscribers); echo $Count ?></span></li>
                    
                </ul>
            </div>
            <div class="well well-small">
                <button type="button" class="btn btn-block"> Versions Control </button>
                
                <button type="button" onclick="window.open('{{url('/admin/slider')}}','_self')" class="btn btn-success btn-block"> Sliders</button>
                <button type="button" onclick="window.open('{{url('/admin/countries')}}','_self')" class="btn btn-success btn-block"> Countries</button>
                <button type="button" onclick="window.open('{{url('/admin/banner')}}','_self')" class="btn btn-primary btn-block"> Banners</button>
                <button type="button" onclick="window.open('{{url('/admin/categories')}}','_self')" class="btn btn-warning btn-block"> Categories</button>
                {{-- <button type="button" onclick="window.open('{{url('/admin/cartypes')}}','_self')" class="btn btn-warning btn-block"> Car Types</button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/transfers')}}','_self')" class="btn btn-success btn-block"> Transfers </button> --}}
                <button type="button" onclick="window.open('{{url('/admin/notifications')}}','_self')" class="btn btn-danger btn-block"> Notifications </button>
                {{-- <button type="button" onclick="window.open('{{url('/admin/bookings')}}','_self')" class="btn btn-success btn-block"> Bookings </button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/how')}}','_self')" class="btn btn-success btn-block"> How it works </button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/gallery')}}','_self')" class="btn btn-primary btn-block"> Gallery Grid</button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/galleryList')}}','_self')" class="btn btn-primary btn-block"> Gallery List</button> --}}
                <button type="button" onclick="window.open('{{url('/admin/samples')}}','_self')" class="btn btn-info btn-block"> Sample Safaris </button>
                <button type="button" onclick="window.open('{{url('/admin/destinations')}}','_self')" class="btn btn-success btn-block"> Destinations </button>
                <button type="button" onclick="window.open('{{url('/admin/extras')}}','_self')" class="btn btn-success btn-block"> Extras Info </button>
                <button type="button" onclick="window.open('{{url('/admin/experiences')}}','_self')" class="btn btn-info btn-block"> Experiences </button>
                <button type="button" onclick="window.open('{{url('/admin/itineries')}}','_self')" class="btn btn-info btn-block"> Itineraries </button>
                {{-- <button type="button" onclick="window.open('{{url('/admin/rooms')}}','_self')" class="btn btn-success btn-block"> Rooms </button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/testimonials')}}','_self')" class="btn btn-primary btn-block"> Testimonials</button> --}}
                <button type="button" onclick="window.open('{{url('/admin/blog')}}','_self')" class="btn btn-success btn-block"> Blogs/News </button>
                {{-- <button type="button" onclick="window.open('{{url('/admin/events')}}','_self')" class="btn btn-success btn-block"> Events </button> --}}
                {{-- <button type="button" onclick="window.open('{{url('/admin/bookings')}}','_self')" class="btn btn-warning btn-block"> Bookings </button> --}}
                <button type="button" onclick="window.open('{{url('/admin/subscribers')}}','_self')" class="btn btn-danger btn-block"> Subscribers </button>
                {{-- <button type="button" onclick="window.open('{{url('/admin/guides')}}','_self')" class="btn btn-danger btn-block"> Guides </button> --}}
                <button type="button" onclick="window.open('{{url('/admin/updates')}}','_self')" class="btn btn-block"> Updates </button>
                <!-- <center><h5>Inactive Features</h5></center>
                <button type="button" onclick="window.open('{{url('/admin/subCategories')}}','_self')" class="btn btn-warning btn-block"> Sub Categories</button>
                <button type="button" onclick="window.open('{{url('/admin/pages')}}','_self')" class="btn btn-info btn-block"> Pages</button>
                <button type="button" onclick="window.open('{{url('/admin/blog')}}','_self')" class="btn btn-info btn-block"> Blogs</button>
                <button type="button" onclick="window.open('{{url('/admin/galleryList')}}','_self')" class="btn btn-primary btn-block"> Gallery</button>
                <button type="button" onclick="window.open('{{url('/admin/traceServices')}}','_self')" class="btn btn-danger btn-block"> Active Service </button>
                <button type="button" onclick="window.open('{{url('/admin/service_rendered')}}','_self')" class="btn btn-info btn-block"> Services Delivered </button>
                <button type="button" onclick="window.open('{{url('/admin/testimonials')}}','_self')" class="btn btn-success btn-block"> Testimonials </button>
                <button type="button" class="btn btn-warning btn-block"> Sales </button>
                <button type="button" onclick="window.open('{{url('/admin/subscribers')}}','_self')" class="btn btn-success btn-block"> Subscribers </button>
                <button type="button" onclick="window.open('{{url('/admin/daily')}}','_self')" class="btn btn-success btn-block"> Daily Quote </button> -->
          
        
            </div>
            
         

        </div>