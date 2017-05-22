@extends('layouts.home_master')

@section('content')

    <div class="jumbotron text-center">
        <div class="clearfix"></div>
        <h1 class="upper">Knowledge Base</h1><br>
        <div class="center">
            <a type="button" class="btn btn-primary" href="/login">Login Now</a>
        </div>
    </div>
    <div class="row">
    <div class="col-md-8 dashboard_graph">
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h4>First Topic</h4>
                </div>
                <div class="clearfix"></div>
                <div class="x_content">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,</p>
                
                </div>
            </div>
        </div>  
        {{-- <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h4>Second Topic</h4>
                </div>
                <div class="x_content">
                    <p>Some content</p>
                </div>
            </div>
        </div> 
        </div>  --}} 
                  
    </div>
    <div class="col-md-4 dashboard_graph">          
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h4>Related Topics</h4>
                </div>
                <div class="x_content">
                    <p>Some content</p>
                </div>
            </div>
        </div> 
        <div class="col-md-12">
            <div class="x_panel">
                <div class="x_title">
                    <h4>Tags</h4>
                </div>
                <div class="x_content">
                    <p>Some content</p>
                </div>
            </div>
        </div>
          
         
    </div>
    </div>
  

    {{-- <div class="col col-md-12">
        <p>Hello</p>
    </div> --}}

@endsection
