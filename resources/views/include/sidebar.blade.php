

<?php
$path = '';
$membership = [
    [
        'name' => '',
        'text' => 'เบิกอุปกรณ์',
        'icon' => '',
        'route'=> '',
        'link' =>  '',
    ],

];

?>

<div class="main-sidebar sidebar-style-2 sidebar-bg">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand text-center">
            <div style="">
             
            </div>
            <div class="">
                <span><b style="font-size: 18px">ADMIN</b></span>
            </div>
        </div>
        <ul class="sidebar-menu">
            {{-- MEMBERSHIP --}}
            <li>
                <a class="nav-link" style="padding-left:0px">
                    <i></i>
                    <span><b style="font-size: 18px;">เบิกอุปกรณ์</b></span>
                </a>
            </li>
            @foreach($membership as $key => $item)
                <li
                    id="menu-{{$item['name']}}"
                    data-menu-name="{{$item['name']}}"
                    data-menu-url="{{$item['link']}}"
                    class="{{ request()->is('_teacher/'.$item['route'])
                        || request()->is('_teacher/'.$item['route'].'/*')
                        ? 'menu-active' : '' }}"
                >
                    <a class="nav-link" href="{{$item['link']}}" {{!empty($item['_blank']) ? 'target="_blank"' : null}}>
                        <i class="{{$item['icon']}}" style="font-size: 16px;"></i>
                    <span>{{$item['text']}}</span>
                    </a>
                </li>
            @endforeach
           

        </ul>
    </aside>
</div>
