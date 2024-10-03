<script src="{{url('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
<!--<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>-->
<script src="
https://cdn.jsdelivr.net/npm/ckeditor5-classic-free-full-feature@35.4.1/build/ckeditor.min.js
"></script>

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{url('backend/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{url('backend/app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{url('backend/app-assets/vendors/js/extensions/unslider-min.js')}}"></script>
<script src="{{url('backend/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{url('backend/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{url('backend/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{url('backend/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>

<!-- BEGIN: Page Vendor JS-->
<script src="{{url('backend/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page JS-->
<script src="{{url('backend/app-assets/js/scripts/forms/form-repeater.js')}}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page JS-->
<script src="{{url('backend/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
<!-- END: Page JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="{{url('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ url('backend/assets/js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: "advcode advlist advtable anchor autocorrect autolink autosave casechange charmap checklist codesample directionality editimage emoticons export footnotes formatpainter help image insertdatetime link linkchecker lists media mediaembed mergetags nonbreaking pagebreak permanentpen powerpaste searchreplace table tableofcontents tinymcespellchecker typography visualblocks visualchars wordcount",
    toolbar: "undo redo spellcheckdialog  | blocks fontfamily fontsize | bold italic underline forecolor backcolor | link image | align lineheight checklist bullist numlist | indent outdent | removeformat typography",
    fontsize_formats:
    "8pt 9pt 10pt 11pt 12pt 14pt 18pt 24pt 30pt 36pt 48pt 60pt 72pt 96pt",
});
</script>

    @yield('scripts')





<!--<script>-->
<!--ClassicEditor-->
<!--    .create( document.querySelector( '#exp_ar' ), {-->
<!--            } )-->
<!--    .catch( error => {-->
<!--        console.error( error );-->
<!--    } );-->
<!--</script>-->

// <script>
// ClassicEditor
//     .create( document.querySelector( '#exp_en' ) )
//     .catch( error => {
//         console.error( error );
//     } );
// </script>

// <script>
// ClassicEditor
//     .create( document.querySelector( '#body_en' ) )
//     .catch( error => {
//         console.error( error );
//     } );
// </script>

// <script>
// ClassicEditor
//     .create( document.querySelector( '#body_ar' ) )
//     .catch( error => {
//         console.error( error );
//     } );
// </script>
// <script>
// ClassicEditor
//     .create( document.querySelector( '#summary_ar' ) )
//     .catch( error => {
//         console.error( error );
//     } );
// </script>
// <script>
// ClassicEditor
//     .create( document.querySelector( '#summary_en' ) )
//     .catch( error => {
//         console.error( error );
//     } );
// </script>
