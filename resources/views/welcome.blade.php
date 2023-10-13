<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>MegaMenu</title>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="bg-white">
            <div class="mx-auto bg-dark-blue border-b border-light-blue">
                <div class="flex mx-auto max-w-screen-xl">
                    <div class="p-4"><img src="/images/logo.png" /></div>
                    <div class="p-4 w-full rounded-md border-0"><input type="text" placeholder="Search for a product" class="p-2 w-full rounded"/></div>
                    <div class="p-4 flex">
                        <svg class="m-2 mt-3 h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path xmlns="http://www.w3.org/2000/svg" d="M11.0039 10.9375C13.6055 10.9375 15.75 13.082 15.75 15.6836V16.5625C15.75 17.5117 14.9766 18.25 14.0625 18.25H1.6875C0.738281 18.25 0 17.5117 0 16.5625V15.6836C0 13.082 2.10938 10.9375 4.71094 10.9375C5.73047 10.9375 6.1875 11.5 7.875 11.5C9.52734 11.5 9.98438 10.9375 11.0039 10.9375ZM14.0625 16.5625V15.6836C14.0625 13.9961 12.6914 12.625 11.0039 12.625C10.4766 12.625 9.66797 13.1875 7.875 13.1875C6.04688 13.1875 5.23828 12.625 4.71094 12.625C3.02344 12.625 1.6875 13.9961 1.6875 15.6836V16.5625H14.0625ZM7.875 10.375C5.0625 10.375 2.8125 8.125 2.8125 5.3125C2.8125 2.53516 5.0625 0.25 7.875 0.25C10.6523 0.25 12.9375 2.53516 12.9375 5.3125C12.9375 8.125 10.6523 10.375 7.875 10.375ZM7.875 1.9375C6.01172 1.9375 4.5 3.48438 4.5 5.3125C4.5 7.17578 6.01172 8.6875 7.875 8.6875C9.70312 8.6875 11.25 7.17578 11.25 5.3125C11.25 3.48438 9.70312 1.9375 7.875 1.9375Z" fill="white"/>
                        </svg>
                        <button type="button" class="rounded-sm bg-pure px-3 py-2 flex text-white">
                            <svg class="m-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path xmlns="http://www.w3.org/2000/svg" d="M15.6212 9.72266C15.5333 10.0449 15.2404 10.25 14.9181 10.25H6.33411L6.53918 11.1875H14.3907C14.8302 11.1875 15.1818 11.627 15.0646 12.0664L14.9181 12.7695C15.4747 13.0332 15.8556 13.5898 15.8556 14.2344C15.8556 15.1426 15.0939 15.875 14.215 15.875C13.3068 15.875 12.5743 15.1426 12.5743 14.2344C12.5743 13.7949 12.7501 13.3848 13.0431 13.0625H6.92004C7.21301 13.3848 7.41809 13.7949 7.41809 14.2344C7.41809 15.1426 6.65637 15.875 5.77747 15.875C4.86926 15.875 4.13684 15.1426 4.13684 14.2344C4.13684 13.6484 4.45911 13.1211 4.95715 12.8281L2.87708 2.75H0.855591C0.445435 2.75 0.152466 2.45703 0.152466 2.04688V1.57812C0.152466 1.19727 0.445435 0.875 0.855591 0.875H3.84387C4.16614 0.875 4.45911 1.13867 4.547 1.46094L4.81067 2.75H16.295C16.7638 2.75 17.0861 3.18945 16.9982 3.62891L15.6212 9.72266Z" fill="white"/>
                            </svg>
                            £0.00
                        </button>
                    </div>
                </div>
            </div>
            <div class="mx-auto bg-dark-blue">
                <div class="mx-auto flex max-w-screen-xl">
                    <div class="relative">
                        <button type="button" class="flex items-center gap-x-1 leading-6 text-white" aria-expanded="false">
                            <svg class="m-2 mt-3 h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path xmlns="http://www.w3.org/2000/svg" d="M2.34375 0.65625C2.57812 0.65625 2.8125 0.890625 2.8125 1.125V3C2.8125 3.26367 2.57812 3.46875 2.34375 3.46875H0.46875C0.205078 3.46875 0 3.26367 0 3V1.125C0 0.890625 0.205078 0.65625 0.46875 0.65625H2.34375ZM2.34375 5.34375C2.57812 5.34375 2.8125 5.57812 2.8125 5.8125V7.6875C2.8125 7.95117 2.57812 8.15625 2.34375 8.15625H0.46875C0.205078 8.15625 0 7.95117 0 7.6875V5.8125C0 5.57812 0.205078 5.34375 0.46875 5.34375H2.34375ZM2.34375 10.0312C2.57812 10.0312 2.8125 10.2656 2.8125 10.5V12.375C2.8125 12.6387 2.57812 12.8438 2.34375 12.8438H0.46875C0.205078 12.8438 0 12.6387 0 12.375V10.5C0 10.2656 0.205078 10.0312 0.46875 10.0312H2.34375ZM14.5312 6.04688C14.7656 6.04688 15 6.28125 15 6.51562V6.98438C15 7.24805 14.7656 7.45312 14.5312 7.45312H5.15625C4.89258 7.45312 4.6875 7.24805 4.6875 6.98438V6.51562C4.6875 6.28125 4.89258 6.04688 5.15625 6.04688H14.5312ZM14.5312 10.7344C14.7656 10.7344 15 10.9688 15 11.2031V11.6719C15 11.9355 14.7656 12.1406 14.5312 12.1406H5.15625C4.89258 12.1406 4.6875 11.9355 4.6875 11.6719V11.2031C4.6875 10.9688 4.89258 10.7344 5.15625 10.7344H14.5312ZM14.5312 1.35938C14.7656 1.35938 15 1.59375 15 1.82812V2.29688C15 2.56055 14.7656 2.76562 14.5312 2.76562H5.15625C4.89258 2.76562 4.6875 2.56055 4.6875 2.29688V1.82812C4.6875 1.59375 4.89258 1.35938 5.15625 1.35938H14.5312Z" fill="white"/>
                            </svg>
                            Products                        
                        </button>
                        <div class="absolute top-full z-10 mt-3 max-w-max bg-white text-sm">
                            <div class="p-2">
                                <div class="flex items-center gap-x-4 text-sm leading-6 w-screen max-w-xs">
                                    <div class="flex-auto bg-pure p-2">
                                        <a href="#" class="block font-semibold text-white" aria-expanded="false">
                                            General Scaffold Products                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="white"/>
                                            </svg>
                                        </a>
                                    </div>                                    
                                </div>
                                <div class="md:absolute order-1 top-2 left-full w-screen max-w-xs ml-2">
                                    <a href="#" class="block font-semibold pl-2">
                                        View all                               
                                    </a>
                                    <a href="#" class="block font-semibold p-2">
                                        Scaffold Tube                                
                                    </a>
                                    <a href="#" class="block font-semibold bg-pure text-white p-2">
                                        Scaffold Fittings                              
                                    </a>
                                    <a href="#" class="block font-semibold p-2">
                                        Scaffold Boards                                
                                    </a>
                                    </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Height Safety Equipment                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Scaffold Tooling & Tethering                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Scaffold Fixings                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Scafftag Tagging Systems
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Builders Plant (Non-Mechanical)
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Scaffold Towers & Light Access
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 text-sm leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Sheeting, Debris Netting & Brickguards                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 text-sm leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Plastic Products
                                        </a>
                                    </div>
                                </div>
                                <div class="group relative flex items-center gap-x-4 p-2 text-sm leading-6 hover:bg-pure ">
                                    <div class="flex-auto">
                                        <a href="#" class="block font-semibold hover:text-white">
                                            Accessories                                
                                            <svg class='float-right mt-2' width="6" height="11" viewBox="0 0 6 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5.58203 6.04883L1.83203 9.79883C1.56836 10.0625 1.1582 10.1504 0.806641 10.0039C0.455078 9.85742 0.220703 9.50586 0.220703 9.125V1.625C0.220703 1.24414 0.455078 0.921875 0.806641 0.775391C1.1582 0.628906 1.56836 0.716797 1.83203 0.980469L5.58203 4.73047C5.96289 5.08203 5.96289 5.69727 5.58203 6.04883Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
    </body>
</html>
