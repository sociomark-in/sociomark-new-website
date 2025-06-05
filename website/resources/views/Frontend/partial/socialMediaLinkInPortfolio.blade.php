 @if(isset($data['social']))
 <div class="th-social">
     <p class="sec-para"><b>Page Link:</b></p>

     @if(isset($data['social']['facebook']))
     <a href="{{ $data['social']['facebook'] }}" target="_blank">
         <i class="fab fa-facebook-f"></i>
     </a>
     @endif

     @if(isset($data['social']['instagram']))
     <a href="{{ $data['social']['instagram'] }}" target="_blank">
         <i class="fab fa-instagram"></i>
     </a>
     @endif

     @if(isset($data['social']['x']))
     <a href="{{ $data['social']['x'] }}" target="_blank">
         <i class="fa-brands fa-x-twitter"></i>
     </a>
     @endif

     @if(isset($data['social']['linkdin']))
     <a href="{{ $data['social']['linkdin'] }}" target="_blank">
         <i class="fab fa-linkedin-in"></i>
     </a>
     @endif
 </div>
 @endif