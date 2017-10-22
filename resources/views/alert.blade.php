<div class="alert alert-{{ $type }} {{ $class or '' }}
        @istrue($dismissible, 'alert-dismissible')
        @istrue($animated, 'fade show')"
     role="alert">

    @istrue($dismissible)
    <button type="button" class="close" data-dismiss="alert" aria-label="{{ trans('bs.alert.close') }}">
        <span aria-hidden="true">&times;</span>
    </button>
    @endistrue

    @isset($heading)
        <h4 class="alert-heading">{{ $heading }}</h4>
    @endisset

    {{ $slot }}
</div>