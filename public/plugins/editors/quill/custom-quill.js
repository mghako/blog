// Basic
$(function() {
  var toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block', 'image'],
  
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
    [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
    [{ 'direction': 'rtl' }],                         // text direction
  
    [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
  
    [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
    [{ 'font': [] }],
    [{ 'align': [] }],
  
    ['clean']                                         // remove formatting button
  ];
  // var quill = new Quill('#editor-container', {
  //   modules: {
  //     toolbar: [
  //       [{ header: [1, 2, false] }],
  //       ['bold', 'italic', 'underline'],
  //       ['image', 'code-block']
  //     ]
  //   },
  //   placeholder: 'Compose an epic...',
  //   theme: 'snow'  // or 'bubble'
  // });
  
  
  // With Tooltip
  
    var quill = new Quill('#quill-content', {
      modules: {
        toolbar: toolbarOptions
      },
      placeholder: 'Compose an epic...',
      theme: 'snow'
    });
    quill.on('text-change', function (delta, oldDelta, source) {
      $('#quill-tooltip').text($(".ql-editor").html());
  });
    // Enable all tooltips
    // $('[data-toggle="tooltip"]').tooltip();
    
    // Can control programmatically too
    // $('.ql-italic').mouseover();
    // setTimeout(function() {
    //   $('.ql-italic').mouseout();
    // }, 2500);
});
