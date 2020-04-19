@extends('layouts.app')

@section('content')
<div class="mx-auto h-full flex justify-center items-center bg-gray-300">
    <div class="w-96 bg-france-blue rounded-lg shadow-xl p-6">

        <svg class="fill-current text-white w-64"  xmlns="http://www.w3.org/2000/svg">
            <path d="M19.8516 19.2266H5.60156V31.3203H22.2188V35H1.26562V0.875H22.0078V4.57812H5.60156V15.5469H19.8516V19.2266ZM39.8438 28.7656L40.2422 30.3359L40.6641 28.7656L47.7656 9.64062H52.1953L41.8594 35H38.5547L28.125 9.64062H32.5781L39.8438 28.7656ZM69.9375 35.4688C68.1562 35.4688 66.5156 35.1641 65.0156 34.5547C63.5312 33.9453 62.2578 33.0938 61.1953 32C60.1328 30.9062 59.3047 29.6094 58.7109 28.1094C58.1172 26.6094 57.8203 24.9766 57.8203 23.2109V22.2266C57.8203 20.1797 58.1484 18.3516 58.8047 16.7422C59.4609 15.1172 60.3281 13.75 61.4062 12.6406C62.5 11.5156 63.7344 10.6562 65.1094 10.0625C66.5 9.46875 67.9219 9.17188 69.375 9.17188C71.2031 9.17188 72.7969 9.49219 74.1562 10.1328C75.5312 10.7578 76.6719 11.6328 77.5781 12.7578C78.4844 13.8672 79.1562 15.1797 79.5938 16.6953C80.0469 18.2109 80.2734 19.8516 80.2734 21.6172V23.5625H62.1562C62.2031 24.7188 62.4219 25.8047 62.8125 26.8203C63.2188 27.8359 63.7656 28.7266 64.4531 29.4922C65.1562 30.2422 65.9922 30.8359 66.9609 31.2734C67.9297 31.7109 69 31.9297 70.1719 31.9297C71.7188 31.9297 73.0938 31.6172 74.2969 30.9922C75.5 30.3672 76.5 29.5391 77.2969 28.5078L79.9453 30.5703C79.5234 31.2109 78.9922 31.8281 78.3516 32.4219C77.7266 33 77 33.5156 76.1719 33.9688C75.3438 34.4219 74.4062 34.7812 73.3594 35.0469C72.3125 35.3281 71.1719 35.4688 69.9375 35.4688ZM69.375 12.7344C68.5 12.7344 67.6719 12.8984 66.8906 13.2266C66.1094 13.5391 65.4062 14.0078 64.7812 14.6328C64.1562 15.2422 63.625 16 63.1875 16.9062C62.7656 17.7969 62.4688 18.8281 62.2969 20H75.9375V19.6719C75.8906 18.8281 75.7266 17.9922 75.4453 17.1641C75.1797 16.3359 74.7812 15.5938 74.25 14.9375C73.7188 14.2812 73.0469 13.75 72.2344 13.3438C71.4375 12.9375 70.4844 12.7344 69.375 12.7344ZM104.18 9.17188C104.586 9.17188 105.008 9.1875 105.445 9.21875C105.883 9.23438 106.297 9.27344 106.688 9.33594C107.094 9.38281 107.461 9.44531 107.789 9.52344C108.133 9.60156 108.414 9.6875 108.633 9.78125L108.047 14.0234C107.203 13.8359 106.398 13.7031 105.633 13.625C104.883 13.5312 104.094 13.4844 103.266 13.4844C101.234 13.4844 99.5859 13.9453 98.3203 14.8672C97.0703 15.7891 96.1484 17.0781 95.5547 18.7344V35H91.1953V9.64062H95.3203L95.5312 13.6719C96.5625 12.2812 97.7969 11.1875 99.2344 10.3906C100.688 9.57812 102.336 9.17188 104.18 9.17188ZM125.719 26L126.844 29.0703L134.578 9.64062H139.43L126.562 38.9141C126.266 39.5703 125.883 40.2656 125.414 41C124.961 41.7344 124.406 42.4141 123.75 43.0391C123.094 43.6641 122.328 44.1875 121.453 44.6094C120.578 45.0312 119.57 45.2422 118.43 45.2422C118.227 45.2422 118 45.2266 117.75 45.1953C117.5 45.1797 117.25 45.1484 117 45.1016C116.75 45.0703 116.516 45.0312 116.297 44.9844C116.078 44.9375 115.898 44.8984 115.758 44.8672L116.461 41.3281C116.57 41.3281 116.719 41.3359 116.906 41.3516C117.094 41.3672 117.289 41.3828 117.492 41.3984C117.695 41.4141 117.891 41.4219 118.078 41.4219C118.266 41.4375 118.414 41.4453 118.523 41.4453C119.117 41.4453 119.656 41.2812 120.141 40.9531C120.641 40.625 121.078 40.2344 121.453 39.7812C121.844 39.3281 122.172 38.8594 122.438 38.375C122.719 37.8906 122.938 37.4922 123.094 37.1797L124.828 33.8047L113.906 9.64062H118.758L125.719 26ZM0.632812 91V56.875H8.53125C10.9062 56.9062 13.0234 57.3125 14.8828 58.0938C16.7578 58.8594 18.3359 59.9375 19.6172 61.3281C20.9141 62.7031 21.8984 64.3594 22.5703 66.2969C23.2578 68.2188 23.6094 70.3516 23.625 72.6953V75.2031C23.6094 77.5469 23.2578 79.6875 22.5703 81.625C21.8984 83.5469 20.9141 85.2031 19.6172 86.5938C18.3359 87.9688 16.7578 89.0469 14.8828 89.8281C13.0234 90.5938 10.9062 90.9844 8.53125 91H0.632812ZM5.03906 60.4375V87.4609H8.53125C10.375 87.4453 11.9688 87.125 13.3125 86.5C14.6562 85.8594 15.7656 84.9922 16.6406 83.8984C17.5312 82.8047 18.1875 81.5156 18.6094 80.0312C19.0469 78.5469 19.2734 76.9375 19.2891 75.2031V72.6484C19.2734 70.9141 19.0469 69.3125 18.6094 67.8438C18.1719 66.3594 17.5156 65.0781 16.6406 64C15.7656 62.9062 14.6562 62.0469 13.3125 61.4219C11.9688 60.7969 10.375 60.4688 8.53125 60.4375H5.03906ZM46.5703 91C46.3984 90.6719 46.2578 90.2656 46.1484 89.7812C46.0547 89.2812 45.9844 88.7656 45.9375 88.2344C45.5 88.6719 45.0078 89.0859 44.4609 89.4766C43.9297 89.8672 43.3359 90.2109 42.6797 90.5078C42.0391 90.8047 41.3516 91.0391 40.6172 91.2109C39.8828 91.3828 39.1016 91.4688 38.2734 91.4688C36.9297 91.4688 35.7109 91.2734 34.6172 90.8828C33.5391 90.4922 32.6172 89.9688 31.8516 89.3125C31.1016 88.6406 30.5156 87.8516 30.0938 86.9453C29.6875 86.0234 29.4844 85.0312 29.4844 83.9688C29.4844 82.5781 29.7578 81.3594 30.3047 80.3125C30.8672 79.2656 31.6562 78.3984 32.6719 77.7109C33.6875 77.0078 34.9062 76.4844 36.3281 76.1406C37.7656 75.7969 39.3672 75.625 41.1328 75.625H45.8672V73.6328C45.8672 72.8672 45.7266 72.1797 45.4453 71.5703C45.1641 70.9609 44.7656 70.4453 44.25 70.0234C43.7344 69.5859 43.1016 69.25 42.3516 69.0156C41.6172 68.7812 40.7891 68.6641 39.8672 68.6641C39.0078 68.6641 38.2344 68.7734 37.5469 68.9922C36.875 69.2109 36.3047 69.5 35.8359 69.8594C35.3672 70.2188 35 70.6484 34.7344 71.1484C34.4844 71.6328 34.3594 72.1406 34.3594 72.6719H30C30.0156 71.75 30.25 70.8438 30.7031 69.9531C31.1719 69.0625 31.8359 68.2656 32.6953 67.5625C33.5703 66.8438 34.625 66.2656 35.8594 65.8281C37.1094 65.3906 38.5234 65.1719 40.1016 65.1719C41.5391 65.1719 42.875 65.3516 44.1094 65.7109C45.3438 66.0547 46.4062 66.5859 47.2969 67.3047C48.2031 68.0078 48.9141 68.8906 49.4297 69.9531C49.9453 71.0156 50.2031 72.2578 50.2031 73.6797V85.4688C50.2031 86.3125 50.2812 87.2109 50.4375 88.1641C50.5938 89.1016 50.8125 89.9219 51.0938 90.625V91H46.5703ZM38.9062 87.6953C39.75 87.6953 40.5391 87.5859 41.2734 87.3672C42.0078 87.1484 42.6719 86.8594 43.2656 86.5C43.875 86.1406 44.3984 85.7344 44.8359 85.2812C45.2734 84.8125 45.6172 84.3281 45.8672 83.8281V78.6953H41.8359C39.3047 78.6953 37.3359 79.0703 35.9297 79.8203C34.5234 80.5703 33.8203 81.75 33.8203 83.3594C33.8203 83.9844 33.9219 84.5625 34.125 85.0938C34.3438 85.625 34.6641 86.0859 35.0859 86.4766C35.5078 86.8516 36.0391 87.1484 36.6797 87.3672C37.3203 87.5859 38.0625 87.6953 38.9062 87.6953ZM68.0625 82L69.1875 85.0703L76.9219 65.6406H81.7734L68.9062 94.9141C68.6094 95.5703 68.2266 96.2656 67.7578 97C67.3047 97.7344 66.75 98.4141 66.0938 99.0391C65.4375 99.6641 64.6719 100.188 63.7969 100.609C62.9219 101.031 61.9141 101.242 60.7734 101.242C60.5703 101.242 60.3438 101.227 60.0938 101.195C59.8438 101.18 59.5938 101.148 59.3438 101.102C59.0938 101.07 58.8594 101.031 58.6406 100.984C58.4219 100.938 58.2422 100.898 58.1016 100.867L58.8047 97.3281C58.9141 97.3281 59.0625 97.3359 59.25 97.3516C59.4375 97.3672 59.6328 97.3828 59.8359 97.3984C60.0391 97.4141 60.2344 97.4219 60.4219 97.4219C60.6094 97.4375 60.7578 97.4453 60.8672 97.4453C61.4609 97.4453 62 97.2812 62.4844 96.9531C62.9844 96.625 63.4219 96.2344 63.7969 95.7812C64.1875 95.3281 64.5156 94.8594 64.7812 94.375C65.0625 93.8906 65.2812 93.4922 65.4375 93.1797L67.1719 89.8047L56.25 65.6406H61.1016L68.0625 82Z"/>
        </svg>

        <h1 class="text-white text-xl">Enter your credentials</h1>

        <form method="POST" action="{{ route('login') }}" class="pt-6">
            @csrf

            <div class="relative">
                <label for="email" class="lowercase text-gray-800 text-xs font-bold absolute pl-3 pt-2">email</label>

                <div>
                    <input id="email" type="email" class="pt-8 w-full rounded p-3 bg-gray-200 text-gray-800 outline-none focus:bg-blue-300 transition duration-300 ease-in-out" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="your@email.com">

                    @error('email')
                        <span class="text-lava text-sm pt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="relative pt-3">
                <label for="password" class="lowercase text-gray-800 text-xs font-bold absolute pl-3 pt-2">password</label>

                <div>
                    <input id="password" type="password" class="pt-8 w-full rounded p-3 bg-gray-200 text-gray-800 outline-none focus:bg-blue-300 transition duration-300 ease-in-out" name="password" required autocomplete="current-password" placeholder="password">

                    @error('password')
                        <span class="text-lava text-sm pt-1" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="pt-2">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white" for="remember">
                    remember me
                </label>
            </div>

            <div class="pt-8">
                <button type="submit" class="bg-gray-800 hover:bg-gray-700 transform hover:scale-105 text-white font-bold py-2 w-full rounded transition duration-200 ease-in-out">
                    login
                </button>
            </div>

            <div class="flex justify-between pt-8 text-white text-sm font-bold">
                <a class="" href="{{ route('password.request') }}">
                    forgot your password?
                </a>
                <a class="" href="{{ route('register') }}">
                    register
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
