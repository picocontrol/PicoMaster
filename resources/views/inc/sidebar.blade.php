<style>
        .styled-heading {
  text-align: center;
  margin: 0 0 50px; }
  @media (max-width: 768px) {
    .styled-heading {
      margin: 0 0 30px; } }
  .styled-heading h3 {
    position: relative;
    padding: 0 0 23px; }
    .styled-heading h3:after {
      position: absolute;
      content: "";
      width: 60px;
      height: 3px;
      background: #ff3a6d;
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      -ms-transform: translateX(-50%);
      transform: translateX(-50%); }
      </style>

@section ('sidebar')
<div class="card bg-faded">
<h3>Sidebar</h3>
This is the sidebar

</div>
@show

<div class="col md-2">
        <img src="{{asset('img/profilepicture.jpeg')}}" width=100%>