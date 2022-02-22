<div class="sidebar-container mt-10 pt-10">
    <div class="sidebar-logo">
      Back Office
    </div>
    {{-- <ul class="sidebar-navigation">
      <li class="header">Create Formulaire</li>
      <li>
        <a href="{{route('works.create')}}">
            <i class="fa fa-home" aria-hidden="true"></i> Works -form
        </a>
    </li>
      <li>
        <a href="#">
          <i class="fa fa-tachometer" aria-hidden="true"></i> Portfolio -form
        </a>
      </li>
    </ul> --}}
    <ul class="sidebar-navigation">
        <li class="header">Affichage</li>
        <li>
            <a href="{{route('works.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> Works - mes projets
            </a>
        </li>
          <li>
            <a href="{{route('skills.index')}}">
              <i class="fa fa-tachometer" aria-hidden="true"></i> Skills
            </a>
        </li>
        <li>
            <a href="{{route('about.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> About
            </a>
        </li>
        <li>
            <a href="{{route('contact.index')}}">
                {{-- <a href="#"> --}}
              <i class="fa fa-tachometer" aria-hidden="true"></i> Contact
            </a>
        </li>
        <li>
            <a href="{{route('mailbox.index')}}">
                <i class="fa fa-home" aria-hidden="true"></i> Mailbox
            </a>
        </li>

        <li>
            <a href="{{route('dashboard')}}">
                <i class="fa fa-home" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="header">Another Menu</li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i> Friends
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-cog" aria-hidden="true"></i> Settings
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-info-circle" aria-hidden="true"></i> Information
          </a>
        </li>
      </ul>
  </div>
</div>