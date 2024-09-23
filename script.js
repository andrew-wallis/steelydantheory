window.onload = function() {

  var fileNames = [
    "ExBbMajor",
    "ExBbMinor",
    "ExDbMajor",
    "ExDbMinor",
    "ExBbAeolian",
    "ExBbDorian",
    "ExBbMixolydian",
    "ExBbIoanian",
    "ExBackdoorMediantBb",
    "ExBackdoorMediantDb",
    "BSIntro1",
    "BSIntro2",
    "BSIntro3",
    "BSIntro4",
    "BSIntro5",
    "BSVerseOne1",
    "BSVerseOne2",
    "BSVerseOne3",
    "BSVerseOne4",
    "BSVerseOne5",
    "BSChorusOne1",
    "BSChorusOne2",
    "BSChorusOne3",
    "BSChorusOne4",
    "BSBridgeOne1",
    "BSBridgeOne2",
    "BSBridgeTwo1",
    "BSSolo1",
    "BSCoda1",
    "BSCoda2"
  ];

  fileNames.forEach(function(fileName) {
    const divId = "osmd-" + fileName;
    const div = document.getElementById(divId);

  if(div) {
    var osmd = new opensheetmusicdisplay.OpenSheetMusicDisplay(div, {
      backend: "canvas",
      autoResize: true,
    });

    const partNames = (fileName === "BSIntro1") ? true : false; 
    const timeSig = (fileName === "BSIntro1") ? true : false; 

    fetch('musicxml/' + fileName + '.musicxml')
      .then(response => response.text())
      .then(data => {
        osmd.load(data).then(() => {
          osmd.EngravingRules.PageTopMargin = 0;
          osmd.EngravingRules.PageBottomMargin = 0;
          osmd.EngravingRules.PageLeftMargin = 0;
          osmd.EngravingRules.PageRightMargin = 1;
          osmd.EngravingRules.RenderPartNames = partNames;
          osmd.EngravingRules.RenderTimeSignatures = timeSig;
          osmd.EngravingRules.RenderMeasureNumbers = false;
          osmd.Zoom = 0.75
          osmd.EngravingRules.DefaultFontFamily = "neue-haas-unica";
          osmd.EngravingRules.RenderTitle = false;
          osmd.EngravingRules.applyDefaultColorMusic("#121717");
          osmd.render();
        });
      });
    }
  });

}