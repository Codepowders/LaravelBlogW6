@extends('layouts.app')

@section('content')
<?php $error1 = $error2 = $error3 = $error4 = $title1 = $blog = $title2 = $text = $text1 = $cat = $image = "";?>
  <h1>Create Post</h1>
  <!-- <body class="article"> -->
    <div class="main">
      <h2>Blog: nieuw artikel uploaden:</h2>
      <p>Titel Blog, Text Blog en Categorie zijn verplicht in te vullen.<br />
      Subtitel en Subtext zijn optioneel.<br />
      Selecteer vervolgens eerst een foto en druk daarna op 'Upload naar Website'.<br />
      P.S. Je kunt ook geen foto selecteren!</p>
      <p>De text in de blog kun je opmaken met <u>HTML!</u><br />
      Voor een goede snelle cursus ga naar: <a href="https://www.w3schools.com/html/">w3schools.com</a></p><br />
      <form name="form1" class="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" autocomplete="off" enctype="multipart/form-data">
      <div class="inform">
        <span class='namefield'>Titel Blog</span>
        <input type='text' size='43' maxlength='50' name='title1' value='<?php echo $title1; ?>' autocomplete='off' /><br />
        <div id='fieldspace'></div>
        <span class='namefield'>Text Blog:</span><br />
        <textarea class="form-control" rows="10" cols="75" id="textarea" name="blog" onfocus="magic();"><?php echo $blog; ?></textarea><br />
        <span class='namefield'>Categorie</span>
        <select name='cat[]' style='width:150px' multiple>
        </select><br />
        <button type="button" class="button" id="button3">nieuwe categorie</button>
        <div id='itext'><br />
          <input type='text' size='43' maxlength='50' name='text1' value='<?php echo $text1; ?>'/><br />
        </div><br /><br />
        <div id='fieldspace'></div>
        <span class='namefield'>Subtitel</span>
        <input type='text' size='43' maxlength='50' name='title2' value='<?php echo $title2; ?>' autocomplete='off' /><br />
        <div id='fieldspace'></div>
        <label for="comment">Subtext</label><br />
        <textarea class="form-control" rows="2" cols="75" id="comment2" name="subtext"><?php echo $text; ?></textarea><br /><br />
        <div id='fieldspace'></div>
        <span class='namefield'>Selecteer een foto:</span>
        <input type="file" name="fileToUpload" id="fileToUpload" /><br /><br />
        <input type="submit" value="Upload naar Website" name="submit2" id="button2" />
      </div>
      </form>
    </div>
  @endsection
