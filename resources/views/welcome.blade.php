@php
$navlinks = [
        ['title' => 'Booking', 'icon' => "assets/icons/booking.png"],
        ['title' => 'Order', 'icon' => "assets/icons/order.png"],
        ['title' => 'Tracking', 'icon' => "assets/icons/tracking.png"],
        ['title' => 'Quotation', 'icon' => "assets/icons/quotation.png"],
        ['title' => 'Call us', 'icon' => "assets/icons/call.png"],
        ['title' => 'Proposal', 'icon' => "assets/icons/proposal.png"],

    ];
@endphp


<x-layout >
    <!-- Banner -->
<x-thumb.thinq_banner>
    <x-slot:image>
        <img class="object-cover absolute inset-0 size-full" src="{{ asset('assets/banners/procurement-banner.png') }}" alt="Cargo ship at sea representing international logistics" />
    </x-slot:image>
    <x-slot:title>
    <h1 class="text-[#003C97] text-5xl leading-[58px] max-md:max-w-full max-md:text-4xl max-md:leading-[54px]">
    Procurement Perfected, <br/>Logistics Redefined
    </h1>
    </x-slot:title>
    <x-slot:btntitle>Register</x-slot:btntitle>
    <x-slot:content>

    <p class="text-[#003C97]  mt-5 text-xl leading-8 max-md:max-w-full">
    Shaping our vision to being a leader in providing innovative solutions
    in procurement, supply chain and logistics with our
    <span class="font-medium text-blue-900 text-[#003C97]">Sphere360</span>
    degree efficiency technology system.
    </p>
 
    </x-slot:content>

    <x-slot:iconnave>

<nav class="hidden md:flex flex-wrap gap-10 items-start self-stretch my-auto"
    role="navigation" aria-label="Quick actions">
    <div class="grid grid-cols-3">
        <div class="col-span-2"></div>
        <div>
        <ul class="grid grid-cols-3 gap-4">
            @foreach($navlinks as $navlink)
                <button class="flex flex-col grow shrink w-[38px]" aria-label={{$navlink['title']}}>
                    <div
                class="flex gap-10 items-center self-center px-3 py-2.5 w-10 rounded-md border border-[#003C97] border-solid min-h-[40px]">
                        <img loading="lazy" src="{{URL::asset($navlink['icon'])}}" alt={{$navlink['title']}}
                            class="object-contain self-stretch my-auto aspect-[0.85] w-[17px]" />
                    </div>
                    <span class="mt-1.5 text-xs text-center text-[#003C97]">{{$navlink['title']}}</span>
                </button>
            @endforeach
        </ul>
        </div>
        </div>
</nav>


</x-slot:iconnave>

</x-thumb.thinq_banner>

    <!-- Content -->
    <div class="bg-[#DDE8F0]">
    <div class="max-w-7xl mx-auto px-4 py-28 sm:px-6 lg:px-8 space-y-6">
    <section class='key-services'>
            <div class="flex flex-wrap gap-9 items-center">
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/cf59f47243ca2c5efa39c02346294ec30250179611a07ac91e8a880b31fb2a4a?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&"
                    alt="Key services illustration showcasing business transformation"
                    class="object-contain self-stretch my-auto rounded-none aspect-[1.37] min-w-[240px] w-[620px] max-md:max-w-full" />
                <div class="flex flex-col self-stretch my-auto min-w-[240px] w-[454px] max-md:max-w-full">
                    <div class="flex relative flex-col max-w-full w-[203px]">
                        <div class="flex absolute -bottom-2 -left-4 z-0 flex-col pb-3 h-[50px] w-[59px]">
                            <div class="flex shrink-0 w-full rounded-full h-[39px]"></div>
                        </div>
                        <h2 class="z-0 text-3xl font-medium text-blue-900">Key services</h2>
                    </div>
                    <div class="flex flex-col mt-16 w-full text-base max-md:mt-10 max-md:max-w-full">
                        <div class="text-2xl font-medium leading-7 text-sky-950">
                            <span class="text-blue-900">Let's transform,</span>
                            <span class="text-neutral-400">the standards</span>
                            <br />
                            <span class="text-neutral-400">of your business</span>
                        </div>
                        <div class="mt-8 font-light leading-7 text-sky-800 max-md:max-w-full">
                            Join our established network of partners and lets transform your
                            business with our unique innovative solutions and expertise, delivering
                            high quality services to redefine your supply chain.
                        </div>
                        <a href="#opportunities"
                            class="flex gap-3 py-0.5 mt-8 max-w-full text-blue-900 w-[194px] items-center hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                            <span>Discover opportunities</span>
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/745e40ddf3c7afb55b8d21f3ef9ef963c3393b58cf64d8c3b2f23237625d96a1?apiKey=b1bd84c8cfcf466eb7283d9b13fee064&"
                                alt="" class="object-contain z-10 shrink-0 self-end aspect-[1.1] w-[11px]" />
                        </a>
                    </div>
                </div>
            </div>
    </section>

        <!-- Focusing on quality -->

        

        <div class="flex flex-col ">
            <div class="flex flex-wrap gap-10 items-center max-md:max-w-full">
                <div class="self-stretch my-auto text-3xl font-medium leading-9 text-sky-950 w-[377px]">
                    <span class="text-blue-900">Focusing on quality,</span>
                    <span class="text-neutral-400">we</span><br />
                    <span class="text-neutral-400">maintain customer trust</span>
                </div>
                <div
                    class="self-stretch my-auto text-base font-light leading-7 text-sky-800 w-[582px] max-md:max-w-full">
                    We ensure that every procurement has strict quality checks and assurances.
                    Delivery of end-to-end, cost-efficient, and sustainable supply chain
                    solutions<br />
                    with customized strategies to drive business growth.
                </div>
            </div>

        </div>



       
<section id="Focusing on quality" class="py-20">

       
<div class=" relative max-md:px-5">
    <img loading="lazy"
        src="https://cdn.builder.io/api/v1/image/assets/TEMP/56e7855a1c1b0142e05b95c52c475611d0c6c79aa9048b9a7c55f7922d6755be?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
        alt="Decorative background pattern"
        class="object-contain hidden md:absolute right-0 bottom-0 z-0 aspect-[1.26] h-[854px] w-[1080px] max-md:max-w-full" />
    <div class=" elative z-0  max-md:max-w-full">
        <div class="grid lg:grid-cols-2 lg:grid-cols-3  z-0 items-start w-full max-md:max-w-full">
            <div class="bg-[#FFFFFF] p-10 rounded-tl-lg ">
            <img loading="lazy"
                    src="{{ asset('assets/icons/quality.svg') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Quality Assurance
                </div>
                
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    We ensure that every procurement has strict quality checks and
                    assurances with rigorous testing at every production stage.
                    <br>
                    <br>
                </div>
            </div>

            <div class=" bg-[#FFFFFF] p-10">
            <img loading="lazy"
                    src="{{ asset('assets/icons/recognize.svg') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Recognized Brands
                </div>
                
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    Globally recognized brands that meet international and regional
                    standards, complying with industry standards, and certifications to
                    validate quality.
                </div>
            </div>

            <div class="bg-[#FFFFFF] p-10 rounded-tr-lg ">
                <img loading="lazy"
                    src="{{ asset('assets/icons/transport.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Transparent Manufacturing
                </div>
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    Open communication about manufacturing and sourcing methods, ensuring
                    ethical and sustainable supply chains.

                </div>
            </div>

            <div class=" bg-[#FFFFFF] p-10">
            <img loading="lazy"
                    src="{{ asset('assets/icons/customization-i.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Customization
                </div>
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    Offering customization with unique configurations or features tailored
                    to meet specific needs or preferences of customers.

                </div>
            </div>

            <div class="bg-[#FFFFFF] p-10">
            <img loading="lazy"
                    src="{{ asset('assets/icons/innovation-i.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Innovation & Technology
                </div>
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    Ensuring that manufacturers or producers utilizes cutting edge
                    technology in their production processes to meet evolving customer
                    demands.


                </div>
            </div>

            <div class="   m bg-[#FFFFFF] p-10">
                    <img loading="lazy"
                    src="{{ asset('assets/icons/cost.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3.5 text-xl font-medium leading-relaxed text-blue-900">
                    Cost-Effective Solutions
                </div>
                <div class="mt-3.5 text-base font-light leading-6 text-sky-800">
                    Offering the best balance of quality and cost through the
                    implementation of cost-efficient productions with value-added
                    services.
                </div>
            </div>

            <div class="bg-[#FFFFFF] p-10 rounded-bl-lg ">
            <img loading="lazy"
                    src="{{ asset('assets/icons/wide-i.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3 text-xl font-medium leading-relaxed text-blue-900">
                    Wide Range Industries
                </div>
                <div class="mt-3 text-base font-light leading-6 text-sky-800">
                    Source products from diverse range of industries, ensuring superior
                    quality and affordability.
                </div>
            </div>

            <div class="bg-[#FFFFFF] p-10 rounded-br-lg ">
            <img loading="lazy"
                    src="{{ asset('assets/icons/reliable-i.png') }}"
                    alt="Recognized Brands icon" class="object-contain aspect-[1.2] w-[42px]" />
                <div class="mt-3 text-xl font-medium leading-relaxed text-blue-900">
                    Reliable Delivery
                </div>
                <div class="mt-3 text-base font-light leading-6 text-sky-800">
                    Streamlined logistics to ensure on-time delivery with ible return
                    and exchange policies.

                </div>
            </div>

              <div class="flex flex-col grow shrink min-w-[240px] w-[268px] mt-10 place-items-start self-start lg:place-items-end lg:self-end">
                    
                    <button
                    class="flex flex-col px-6 py-4 w-56 max-w-full h-14 text-base font-light leading-none text-white bg-sky-950 bottom-[-92px] min-h-[56px] right-[-27px] rounded-[40px] max-md:px-5"
                    tabindex="0">
                    <div class="flex gap-2 items-center">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/b2134c5a134ff4655f031bc9369dc233d3d965fdd0626543c55b14863ad1621c?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-[0.79] w-[19px]" />
                        <div class="self-stretch my-auto w-[135px]">Request Proposal</div>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/a33848d0f85e53432f4a0f1a86cf8c0d2cf07be42e57bc905f20fc73a802a9dd?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-[0.9] w-[9px]" />
                    </div>
                    </button>
                    
                </div>
        </div>
      
    </div>
</div>
</section>

        <!-- Service Industry -->

       <section id="Service Industry" class="         ">
       <div class="flex flex-col justify-center px-4 py-10">
            <div class="flex justify-between flex-wrap gap-10 items-start mt-1 max-md:max-w-full">
                <div class="flex relative flex-col min-w-[240px] w-[265px]">
                    <div class="flex absolute -bottom-3 -left-6 z-0 flex-col px-3 -pt-1 pb-0.5 h-[50px] w-[59px]"
                        role="presentation" aria-hidden="true">
                        <div class="flex shrink-0 w-full h-10 rounded-full"><img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" /></div>
                    </div>
                    <div class="z-0 text-3xl font-medium text-blue-900" role="heading" aria-level="2">Service Industry
                    </div>
                </div>


                <div class="flex flex-col text-base min-w-[240px] w-[620px] max-md:max-w-full">
                    <div class="font-light leading-7 text-sky-800 max-md:max-w-full">
                        We offer quality from diverse sectors with the best materials and
                        service from expert manufacturers and producers to meet your business
                        needs
                    </div>
                    <a href="#explore-services"
                        class="flex gap-1 items-center self-start mt-5 text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        <span class="self-stretch my-auto w-[201px]">
                            Explore service industries
                        </span>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f3d9e964cf22bcc40a9e2deacff03656061780442968e707cd2ea31d462c6b2d?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]"
                            alt="Arrow indicating link to explore service industries" />
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col px-7 max-md:pl-5">
            <div class="flex flex-col max-md:max-w-full">
                <div class="flex flex-col w-full max-md:max-w-full">
                    <div class="flex flex-wrap gap-10 items-start w-full max-md:max-w-full">
                        <img
                            src="{{ asset('assets/thumb-nails/automotive.png') }}"
                            alt="Automotiv" class="Automotive grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/tool.png') }}"
                            alt="Tools" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/agriculture.png') }}"
                            alt="Agriculture" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[203px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/phamacy.png') }}"
                            alt="Pharmaceutical" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/machinery.png') }}"
                            alt="Manchinery" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/aluminium.png') }}"
                            alt="Aluminium" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/media.png') }}"
                            alt="Media" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[204px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/thumb-nails/leather.png') }}"
                            alt="Leather" class="object-contain grow shrink aspect-[0.72] min-w-[240px] w-[205px]" />
                    </div>
                    <div
                        class="flex gap-10 justify-between items-center self-center mt-11 max-w-full w-[100px] max-md:mt-10">
                        <img loading="lazy"
                            src="{{ asset('assets/icons/arrow-left.svg') }}"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
                        <img loading="lazy"
                            src="{{ asset('assets/icons/arrow-right.svg') }}"
                            alt="" class="object-contain shrink-0 self-stretch my-auto aspect-square w-[30px]" />
                    </div>
                </div>
                <div class="flex flex-col  justify-between mt-28 w-full space-y-6 max-md:mt-10 max-md:max-w-full">
                    <div class="flex relative flex-col max-w-full w-[265px]">
                        <div
                            class="flex absolute -left-7 z-0 flex-col px-3 pt-2 pb-0.5 bottom-[-11px] h-[50px] w-[59px]">
                            <div class="flex shrink-0 w-full rounded-full"><img class="w-full h-full left-0 top-0 absolute object-cover -z-10"
                            src="{{ asset('assets/icons/backdrop.png') }}" /></div>
                        </div>
                        <div class="z-0 text-3xl font-medium text-blue-900">
                            Logistic Delivery
                        </div>
                    </div>
                    <div class="flex flex-wrap gap-10 items-center w-full  max-md:max-w-full">
                        <img class="w-full left-0 top-0  "
                            src="{{ asset('assets/thumb-nails/world-map.png') }}" />
                        <div
                            class="grow shrink self-stretch my-auto text-4xl font-light leading-10 text-neutral-400 w-[476px] max-md:max-w-full">
                            <span class="text-blue-900">Beyond logistics,</span>
                            we delivered in over
                            <span class="text-blue-900">75+ countries</span>
                            worldwide
                        </div>
                        <div class="flex gap-10 items-center self-stretch my-auto min-w-[240px]">
                            <div class="flex flex-col self-stretch my-auto w-[135px]">
                                <div class="text-6xl leading-none text-blue-900 max-md:text-4xl">250+</div>
                                <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">Advanced Systems
                                </div>
                            </div>
                            <div class="flex flex-col self-stretch my-auto w-[135px]">
                                <div class="text-6xl leading-none text-blue-900 max-md:text-4xl">650+</div>
                                <div class="mt-1 text-sm tracking-wide leading-6 text-neutral-400">Customer Trust</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       </section>
        <!--  -->
      

        <!--  -->

        <div class="flex flex-col px-4 py-20">
            <div class="flex flex-col w-full max-md:max-w-full">


            <div class="flex flex-col justify-center px-4 py-10">
            <div class="flex justify-between flex-wrap gap-10 items-start mt-1 max-md:max-w-full">
                <div class="flex relative flex-col min-w-[240px] w-[265px]">
                    <div class="flex absolute -bottom-3 -left-6 z-0 flex-col px-3 -pt-1 pb-0.5 h-[50px] w-[59px]"
                        role="presentation" aria-hidden="true">
                        <div class="flex shrink-0 w-full h-10 rounded-full"><img loading="lazy"
                            src="{{ asset('assets/icons/backdrop.png') }}"
                            alt="Quality Assurance icon" class="object-contain aspect-[1.2] w-[42px]" /></div>
                    </div>
                    <div class="z-0 text-3xl font-medium text-blue-900" role="heading" aria-level="2">Customer Testimonies
                    </div>
                </div>


                <div class="flex flex-col text-base min-w-[240px] w-[620px] max-md:max-w-full">
                    <div class="font-light leading-7 text-sky-800 max-md:max-w-full">
                        We offer quality from diverse sectors with the best materials and
                        service from expert manufacturers and producers to meet your business
                        needs
                    </div>
                    <a href="#explore-services"
                        class="flex gap-1 items-center self-start mt-5 text-blue-900 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-900 focus:ring-offset-2">
                        <span class="self-stretch my-auto w-[201px]">
                            Explore service industries
                        </span>
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/f3d9e964cf22bcc40a9e2deacff03656061780442968e707cd2ea31d462c6b2d?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]"
                            alt="Arrow indicating link to explore service industries" />
                    </a>
                </div>
            </div>
        </div>




























            
                <div class="flex flex-wrap gap-10 items-center self-start max-md:max-w-full">
                    <div class="flex relative flex-col items-start self-stretch  min-w-[240px] w-[356px]">
                        <div class="flex absolute -top-2 z-0 flex-col pb-3 h-[50px] left-[-17px] w-[59px]">
                            <div class="flex shrink-0 w-full rounded-full h-[39px]"><img class="w-full h-full left-0 top-0 absolute object-cover -z-10"
                            src="{{ asset('assets/icons/backdrop.png') }}" /></div>
                        </div>
                        <div
                            class="absolute  z-0 text-3xl font-medium text-blue-900 h-[34px] top-[-3px] w-[356px]">
                            Customer Testimonies
                        </div>

                    </div>
                    <div class="flex flex-col self-stretch my-auto text-base min-w-[240px] w-[620px] max-md:max-w-full">
                        <div class="font-light leading-7 text-sky-800 max-md:max-w-full">
                            Become part of our revolutionary enterprise and experience our <span
                                class="font-medium">Sphere360</span> degree technology that ensures seamless procurement
                            and
                            supply chain efficiency and revitalize your business industry.
                        </div>
                        <div class="flex gap-1.5 items-center self-start mt-4 text-blue-900">
                            <div class="self-stretch my-auto w-[179px]">Discover success cases</div>
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/f3d9e964cf22bcc40a9e2deacff03656061780442968e707cd2ea31d462c6b2d?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]" alt="" />
                        </div>
                    </div>
                </div>


                <div class="flex flex-wrap items-center  w-full max-md:max-w-full">
                    <div
                        class="flex flex-col self-stretch my-auto rounded-none min-w-[240px] w-[626px] max-md:max-w-full">
                        <div class="flex shrink-0 rounded-none  max-md:-mr-2.5 max-md:max-w-full"><img class="object-contain self-stretch my-auto rounded-none aspect-[1.37] min-w-[240px] w-[620px] max-md:max-w-full  "
                        src="{{ asset('assets/thumb-nails/directors.png') }}" />
                        
                      </div>
                    </div>
                    <div
                        class="flex flex-col items-start self-stretch my-auto text-base font-light text-blue-900 min-w-[240px] w-[463px] max-md:max-w-full">
                        <div
                            class="flex flex-col justify-center p-2.5 max-w-full text-xl leading-6 text-zinc-500 w-[379px]">
                            <div class="flex-1 shrink gap-1.5 self-stretch w-full">
                                <span class="font-medium text-blue-900">Philip McCarthy</span>
                                <br />
                                <span class="text-base">Director of Procurement, CityPharma</span>
                            </div>
                        </div>
                        <div class="self-stretch mt-4 leading-7 max-md:max-w-full">
                            “As a pharmaceutical manufacturer, precision and reliability are critical for our supply
                            chain.
                            SphereProcure of ThinQSPhere ensures our raw materials and finished products are delivered
                            on
                            time, every time. Their innovative AI automations system (Sphere360 degree) and logistics
                            solutions have been instrumental in keeping our operations running smoothly and our patients
                            cared for.”
                        </div>
                        <div class="flex gap-1.5 items-center mt-4">
                            <div class="self-stretch my-auto w-[179px]">Discover success cases</div>
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/3418209366ac4438ff013ed11d3c0bb3b08c88a0662bba91bf525fa45c3466ac?apiKey=f9b31430640f4f25af6eace5cd8bec03&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-[1.12] w-[9px]" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   </div>

    <!--  -->

</x-layout>