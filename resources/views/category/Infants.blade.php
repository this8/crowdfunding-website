@extends('layouts.frontend')
@section('content')

<!-- Posters section-->
<h1> Infants </h1>
<div class="raw">
        <div class="col2">

            <div class="add" id="height1">
                <p> This area for emergency tele numbers (Add image) </p>
            </div>
    
            <div class="add" id="height2" style="margin-top: 6%;">
                <p> This area for emergency tele numbers (Add image) </p>
            </div>
    
            
        </div>


    <div class="col1">

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">Reg-no: BST-498</div>
                    <h1 class="display-5 fw-bolder">Patien-name</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs:400000.00</span>
                    </div>
                    <p> (Short description)Lorem ipsum dolor sit amet consectetur. Praesentium at modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>

                    <div id="myProgress">
                        <div id="myBar">0%</div>
                      </div>
                      <br>
                    <div class="d-flex">
                        <form name="poster_1" method="GET">
                            <table>
                                <tr>
                                    <td><input class="form-control text-center me-3" name="amount" id="inputQuantity" type="number"  style="max-width: 8rem" /></td>
                                    <td> <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="move();"> Donate Now </button></td>
                           
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                </div>
                    
                <div class="col-md-6">
                    <div class="small mb-1">Reg-no: BST-498</div>
                    <h1 class="display-5 fw-bolder">Patien-name</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs:40.00</span>
                    </div>
                    <p>(Short description)Lorem ipsum dolor sit amet consectetur. Praesentium at modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="w3-light-grey">
                      <div id="myBar" class="w3-container w3-green w3-center" style="width:20%">20%</div>
                    </div>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number"  style="max-width: 8rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="move()">
                            Donate Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">Reg-no: BST-498</div>
                    <h1 class="display-5 fw-bolder">Patien-name</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs:40.00</span>
                    </div>
                    <p> (Short description)Lorem ipsum dolor sit amet consectetur. Praesentium at modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number"  style="max-width: 8rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            Donate Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">Reg-no: BST-498</div>
                    <h1 class="display-5 fw-bolder">Patien-name</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs:40.00</span>
                    </div>
                    <p> (Short description)Lorem ipsum dolor sit amet consectetur. Praesentium at modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number"  style="max-width: 8rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            Donate Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">Reg-no: BST-498</div>
                    <h1 class="display-5 fw-bolder">Patien-name</h1>
                    <div class="fs-5 mb-5">
                        <span>Rs:40.00</span>
                    </div>
                    <p>(Short description)Lorem ipsum dolor sit amet consectetur. Praesentium at modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number"  style="max-width: 8rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            Donate Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

       
    </div>

    <div class="col2">

        <div class="add" id="height1">
            <p> This area for emergency tele numbers (Add image) </p>
        </div>

        <div class="add" id="height2" style="margin-top: 6%;">
            <p> This area for emergency tele numbers (Add image) </p>
        </div>

        
    </div>

</div>
   
    <script src="/js/scripts.js"> </script>


@endsection