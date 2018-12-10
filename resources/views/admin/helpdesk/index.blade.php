@extends('layout.master')

@section('title')
Help Desk
@endsection

@section('content')
<data-dam></data-dam>

<div class="col-sm-12 col-xl-12">
    <div class="card card-shadow card-responsive" id="widgetLineareaColor">

        <div class="nav-tabs-horizontal" data-plugin="tabs">
            <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#sendMessage"
                        aria-controls="sendMessage" role="tab" aria-selected="true">Kirim Pesan</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineTwo"
                        aria-controls="exampleTabsLineTwo" role="tab" aria-selected="false">Components</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineThree"
                        aria-controls="exampleTabsLineThree" role="tab">Css</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#exampleTabsLineFour"
                        aria-controls="exampleTabsLineFour" role="tab">Javascript</a></li>
                <li class="dropdown nav-item" role="presentation" style="display: none;">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Dropdown </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" data-toggle="tab" href="#sendMessage" aria-controls="sendMessage"
                            role="tab">Home</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTabsLineTwo" aria-controls="exampleTabsLineTwo"
                            role="tab">Components</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTabsLineThree" aria-controls="exampleTabsLineThree"
                            role="tab">Css</a>
                        <a class="dropdown-item" data-toggle="tab" href="#exampleTabsLineFour" aria-controls="exampleTabsLineFour"
                            role="tab">Javascript</a>
                    </div>
                </li>
            </ul>
            <div class="tab-content pt-20">
                <div class="tab-pane active" id="sendMessage" role="tabpanel">
                    <div class="card-block p-0">
                        <div class="pt-15 p-15">
                            <form action="" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="select_category">Select Category</label>
                                    <select name="category" id="" class="form-control">
                                        <option value="error">Error / Bug</option>
                                        <option value="kritik">Kritik</option>
                                        <option value="saran">Saran</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </form>
                            <p class="font-size-30 blue-grey-700">Technical Support</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="exampleTabsLineTwo" role="tabpanel">
                    Sole, latinas incurreret optari vivatur, porro delectu epicurus cadere impedit
                    fit ferreum concludaturque varias, omnium gloriosis vivendo
                    via filio contentam expeteretur fonte expectata, quosque
                    praetor quid iucunditatis fortitudinem esse.
                </div>
                <div class="tab-pane" id="exampleTabsLineThree" role="tabpanel">
                    Maestitiam quamquam iudicare veterum contineri ipse cognoscerem se omittantur dialectica,
                    dixit poterit nondum tempora corpora claudicare ratione
                    percipitur. Earum comprehenderit laudem platonis allevatio
                    graeci, invidus coercendi valetudinis numen deseruisse.
                </div>
                <div class="tab-pane" id="exampleTabsLineFour" role="tabpanel">
                    Adiit optime intemperantiam ostendis doctus brevi provincia suscepi. Eos efficitur
                    inprobis negent turbulenta consentientis ingeniis natura,
                    desperantes quisque concessum theophrasti, torquatus detracto,
                    deinde, intellegentium fruitur errorem nulli vivatur, operis.
                </div>
            </div>
        </div>

        

    </div>
</div>

@endsection

@section('js')
@endsection