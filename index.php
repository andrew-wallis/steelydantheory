<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Babylon Sisters</title>
  <link rel="stylesheet" href="src/output.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.typekit.net/heq1pzb.css">

</head>

<body class="mt-12 mb-24 relative">

  <div class="lg:flex">
    <div class="w-72 px-4 shrink-0"></div>
    <header class="px-4 sm:px-8 grow max-w-screen-md header">
      <h1>Babylon Sisters</h1>
      <div class="credits mt-12">
        <p class="credit mb-1">Words and Music by <span class="credit-name">Walter Becker & Donald Fagen</span></p>
        <p class="credit">Anaylsis by <span class="credit-name">Andy Wallis</span></p>
      </div>
      <hr class="my-12 border-t border-gray-20" />
    </header>
  </div>

  <div class="lg:flex min-h-screen">
    <nav class="w-72 px-4 shrink-0 lg:sticky lg:top-[11.25rem] h-full z-10">
      <h2 class="mb-3 contents-heading">Contents</h2>
      <ol class="contents-menu mb-12">
        <li><a href="#part-one">Musical Overview</a></li>
        <li><a href="#part-two">Introduction</a></li>
        <li><a href="#part-three">Verse One</a></li>
        <li><a href="#part-four">Chorus One</a></li>
        <li><a href="#part-five">Bridge One</a></li>
        <li><a href="#part-six">Verse and Chorus Two</a></li>
        <li><a href="#part-seven">Bridge Two</a></li>
        <li><a href="#part-eight">Solo, Verse and Chorus Three</a></li>
        <li><a href="#part-nine">Coda</a></li>
      </ol>
    </nav>
    <main class="px-4 sm:px-8 grow max-w-screen-md content">
      <p>This article is the first in a possible series going deep into the theory behind Steely Dan’s music. I have chosen to start with “Babylon Sisters” as it is one that had me scratching my head and this article is an attempt to organize my own thoughts about the tune. It is also one of the band’s more popular songs, leading a multi-platinum album, appearing on multiple greatest hits compilations and remaining a staple of their live sets. I wanted to understand how such a seemingly complex composition can work as a piece of popular music. If there is interest, I am considering working through the rest of Gaucho and possibly beyond.</p>

      <p><em>If you haven’t seen it already, I would recommend watching Donald Fagen’s <a target="_blank" href="https://www.youtube.com/watch?v=rR6OsrzbHHY&ab_channel=TheDanVault">Concepts For Jazz-Rock Piano</a>. He explains how he and Walter Becker developed their songs from common blues ideas, covering “Josie”, “Peg”, “Chain Lightning” and Fagen’s “On The Dunes”. This article will attempt to follow a similar train of thought for Babylon Sisters. As you can see from the video, Fagen (and likely Becker) had a strong theoretical understanding of Steely Dan’s music and is able to talk through his musical choices using the common vocabulary of jazz and blues harmony. I am not claiming that this interpretation was Becker and Fagen’s intention when they wrote the tune and it is highly likely certain ideas just “sounded good”.</em></p>

      <p><em>This article assumes some knowledge of music theory, including jazz and blues theory. Where possible, I have included a link explaining theoretical concepts as they arise. The song has been transcribed in standard notation and includes a “lead” line that covers either the vocal or instrumental topline melody and a “reduciton” of the piano and bass part. I have included chord symbols and <a target="_blank" href="https://en.wikipedia.org/wiki/Roman_numeral_analysis#Jazz_and_pop_numerals">jazz/pop Roman numerals</a> explaining the function of each chord.</em></p>

      <p><em>The full transcription is <a href="musicxml/BabylonSisters.musicxml">available in MusicXML format here</a>.</em></p>

      <h2 id="part-one">
        <div class="pre-heading">Part One</div>
        <div class="heading">Musical Overview</div>
      </h2>

      <h3>Keys</h3>

      <p>Babylon Sisters is based from four interrelated <a target="_blank" href="https://en.wikipedia.org/wiki/Key_(music)">key centers</a>. Almost all the <a target="_blank" href="https://en.wikipedia.org/wiki/Diatonic_scale">melodic material</a> and most of the <a target="_blank" href="https://en.wikipedia.org/wiki/Harmonization">chords</a> are derrived from these four scales:</p>

      <h4>Bb major</h4>
      <div class="example" id="osmd-ExBbMajor"></div>
      <h4>Bb minor (the parallel minor of Bb)</h4>
      <div class="example" id="osmd-ExBbMinor"></div>
      <h4>Db major (the relative major of Bb minor)</h4>
      <div class="example" id="osmd-ExDbMajor"></div>
      <h4>Db minor (the parallel minor of Db minor)</h4>
      <div class="example" id="osmd-ExDbMinor"></div>

      <p>The introduction and bridges are in Db major with a <a target="_blank" href="https://en.wikipedia.org/wiki/Borrowed_chord">modal interchange</a> with the <a target="_blank" href="https://en.wikipedia.org/wiki/Parallel_key">parallel minor</a>, Db minor. This introduces a blues sound into these sections, where “<a target="_blank" href="https://en.wikipedia.org/wiki/Blue_note">blue notes</a>” (minor thirds, minor sevenths) are introduced into an otherwise major tonality.</p>

      <p>The verse has a more complex modal interchange around the Bb tonic. The verse starts on a Bbm chord, the <a target="_blank" href="https://en.wikipedia.org/wiki/Relative_key">relative minor</a> of Db major. As the verse progresses, there is a transition from Bb minor to Bb major through the <a target="_blank" href="https://en.wikipedia.org/wiki/Mode_(music)#Modern_modes">modes of the diatonic scale</a> - starting with Bb Aeolian, then Bb Dorian, Bb Mixolydian and Bb Ionian. The first mode, Aeolian, is the natural minor scale and each successive mode adds more notes from the major scale until arriving at the Ionian mode, the major scale itself. This transition is staggered, with each new mode briefly appearing in the harmony before appearing fully in the melody.</p>

      <table>
        <tr>
          <td>
            <h4>Bb Aeolian (from Db Major)</h4>
            <div class="example"  id="osmd-ExBbAeolian"></div>
          </td>
          <td>
            <h4>Bb Dorian (from Ab Major)</h4>
            <div class="example"  id="osmd-ExBbDorian"></div>
          </td>
        </tr>
        <tr>
          <td>
            <h4>Bb Mixolydian (from Eb Major)</h4>
            <div class="example"  id="osmd-ExBbMixolydian"></div>
          </div>
          <td>
            <h4>Bb Ionian (from Bb Major)</h4>
            <div class="example"  id="osmd-ExBbIoanian"></div>
          </td>
        </tr>
      </table>

      <p>Each of these modes comes from a successive clockwise step on the <a target="_blank" href="https://en.wikipedia.org/wiki/Circle_of_fifths">circle of fifths</a>, with Bb Aeolian coming from the sixth degree of Db major, Bb Dorian coming from the second degree of Ab major, Bb Mixolydian coming from the fifth degree of Eb major and Bb Ionian coming from the first degree of Bb major. The successive keys on the circle of fifths are perceived to be “darker” moving anti-clockwise and “brighter” moving clockwise, so this verse progression can be perceived as getting “brighter”. This is an inversion of the common <a target="_blank" href="https://en.wikipedia.org/wiki/Vi%E2%80%93ii%E2%80%93V%E2%80%93I">anti-clockwise resolution around the circle of fifths</a>, used by everyone from Bach to Gerschwin.</p>

      <p>The chorus remains in Bb major, reinforcing this as the overall home key of the tune.</p>
      
      <aside>
        <h3>A note on transcription</h3>
        <p>These keys represent particular challenges for transcription, as do their enharmonic equivalents - A# major, A# minor, C# major and C# minor. There is no way of transcribing this tune without introducing some double sharps or flats along the way. As this is an analysis, I want to show where the chords in the tune come from and how they relate to the home key, so there are going to be some Cb and Fb chords when the chords are derived from Db minor. For the sake of clarity, however, I have named chords built from the sixth degree of Db minor, Bbb, as A - e.g. Bbb7b9b13 in Bar 18 is written A7b9b13.</p>
      </aside>

      <h3>Rhythm and Arrangement</h3>

      <p>The song is in cut time or 2/2 and has a tempo of around 60bpm. It is built on the “Purdie Shuffle” beat, previously introduced on “Home At Last” from <em>Aja</em>. There are also multiple references to reggae and Jamaican culture in the music and lyrics (which might be why this was a single in the United Kingdom, where reggae was popular and Haitian Divorce had been a hit). Reggae references in the song include a “skank” guitar pattern in the verses, off beat phrasing in the melody and bassline (“Drive west on…”, “Babylon…”) and the use of the word “Babylon” (presumably the Rastafari word for the Western world, not the ancient civilisation). There are several passages where the harmony is extremely sparse. These sections are sonically reminiscent of dub reggae, where harmony is stripped back, putting the emphasis on the bass and drums.</p>

      <h3>Backdoor-Mediant Turnaround</h3>

      <p>There are several unusual <a target="_blank" href="https://en.wikipedia.org/wiki/Turnaround_(music)">turnarounds</a> in the tune that warrant a separate discussion.</p>

      <p>Introduction - Fb–A7b9b5–Ebm7<br/>
      Bridge - Fb6/9–A13b5–Ebm7<br/>
      Coda - Eb–Ab7b5–Dm7</p>

      <p>In each of these instances, there is a <a target="_blank" href="https://en.wikipedia.org/wiki/Backdoor_progression">backdoor turnaround</a> targeting a tonic or <a target="_blank" href="https://en.wikipedia.org/wiki/Tonicization">tonicized</a> chord (IV–bVII–I). However, the tonicized chord has been <a target="_blank" href="https://en.wikipedia.org/wiki/Chord_substitution">subsituted</a> with its mediant, a common substitute for the tonic. In the first instance, the Fb–A7 turnaround is targeting Cb, the bVII of Db. However, it resolves to mediant of Cb, Eb. In the second instance, the Eb–Ab7alt turnaround is targeting the tonic, Bb, but instead resolves to the mediant, Dm7. Given the novel nature of this turnaround, I will refer to it as the “backdoor-mediant turnaround” whenever it occurs.</p>

      <p>This is how the Bb backdoor-mediant turnaround can be derived by changing a few notes in a common <a target="_blank" href="https://en.wikipedia.org/wiki/Ii%E2%80%93V%E2%80%93I_progression">ii–V–I</a> turnaround:</p>
      
      <div class="example" id="osmd-ExBackdoorMediantBb"></div>

      <ul>
        <li>IV6 - The root of the ii chord, Cm7, is moved up a minor third to make an Eb6 chord. </li>
        <li>bVII7 - The root of the V chord, F9, is also raised a minor third. The G and Eb are flattened, making the chord an Ab7b9b5.</li>
        <li>iii7 - Finally, the root of the Bbmaj9 is moved up a major third, making the chord a Dm7.</li>
      </ul>

      <h3>Lyrical overview</h3>

      <p>I don’t want to get too much into the analysis of the lyrics. Like most Steely Dan songs, there are some clear narrative aspects to the lyric and some cryptic elements that are left up to the listener to interpret. What is clear from the words, and what is notable in relation to the music, is that our narrator is traveling in a car for an encounter which, all though he finds desirable, has led to dire warnings from his friends. Throughout the tune, the narrator flips between the positives and negatives of this encounter, just as the music flips between minor and major. In small doses, major/minor modal interchange can sound wistful or romantic. However, spread over longer passages it can reflect the confusion (or even delusion) of the narrator. This is something Becker and Fagen exploit here and the musical choices reflect the tone of the lyric.</p>

      <h2 id="part-two">
        <div class="pre-heading">Part Two</div>
        <div class="heading">Introduction</div>
      </h2>
      
      <aside>
        <h3>Summary</h3>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="6">Introduction (Db)</th>
              <td colspan="1" rowspan="1">Gb5</td>
              <td colspan="1" rowspan="1">%</td>
              <td colspan="1" rowspan="1">Cb5</td>
              <td colspan="1" rowspan="1">Ab5</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Fb5</td>
              <td colspan="1" rowspan="1">Ab5</td>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Gb5</td>
              <td colspan="1" rowspan="1">Cb5</td>
              <td colspan="1" rowspan="1">Ab5</td>
              <td colspan="1" rowspan="1">Cb5</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Fb Gb7/Fb </td>
              <td colspan="1" rowspan="1">Fb5 A7b9b5</td>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Fb Gb7/Fb </td>
              <td colspan="1" rowspan="1">Fb5 A7b9b5</td>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="2" rowspan="1"></td>
            </tr>
            <tr>
              <th colspan="1" rowspan="1">Verse (Bb)</th>
              <td colspan="1" rowspan="1">Bbm7…</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
          </tbody>
        </table>
      </aside>

      <p>The song begins with an extended 23 bar introduction in Db. It reuses some musical material from the chorus and bridge, but is largely unrelated to the rest of the tune. Notably the tonic Db chord doesn't appear and all of the phrases resolve to an Ebm7 chord, suggesting an Eb Dorian modality.</p>
        
      <p>Given Steely Dan’s reputation for rich chord voicings, it is noticeable how sparse the harmony is in this section. Most of the chords are mostly voiced as fifth (Root-Five) chords - any additional harmonic information in this section has to be inferred from topline melody.</p>

      <div class="example">
        <div id="osmd-BSIntro1"></div>
      </div>

      <p>The first four bars move through a Gb5–Cb5–Ab5 progression (IV–bVII–V). There is the first hint of the Db minor tonality in the borrowed Cb5 chord, establishing a “bluesy” sound early in the piece. IV–bVII seems to be setting up a backdoor progression to I, which is interrupted by the shift down a minor third to the V chord instead. A melodic theme in Db major is played on the electric piano. It is musically unrelated to the rest of the piece and is seemingly improvised, though it has been played note-for-note live.</p>

      <div class="example">
        <div id="osmd-BSIntro2"></div>
      </div>

      <p>The Ab5 leads to another unexpected chord, an Fb (bIII) chord borrowed from Db minor. This shifts back to another Ab5 before resolving down a fourth to an Ebm7 (ii7). Over this section a lick in Db minor is played, introducing a blues sound to the topline melody. The final chord, Ebm7, appears as a figure consisting of two sus chords - an Ebm7 and a Eb7sus4. Throughout this section there are several instances where a resolution to the tonic is expected but never occurs, giving this whole section a restless feeling. The Ab5–Ebm7 resolution at the end is similar to the iv-i found in minor <a target="_blank" href="https://en.wikipedia.org/wiki/Twelve-bar_blues">blues progressions</a> and reinforces the “bluesy” sound of this passage.</p>

      <div class="example">
        <div id="osmd-BSIntro3"></div>
      </div>

      <p>The next four bars are a variation on the opening theme, over a Gb5–Cb5–Ab5–Cb5 progression (IV–bVII–V–bVII). Once again a dominant chord appears without a clear resolution to a tonic, instead shifting back to a bVII (Cb5).</p>

      <div class="example">
        <div id="osmd-BSIntro4"></div>
      </div>

      <p>This leads to the introduction the “Shake It” theme. It is formed from a major triad, followed by dominant seventh in the <a target="_blank" href="https://en.wikipedia.org/wiki/Third_inversion">third inversion</a> a tone above. In this case it appears as an Fb (bIII) followed by Gb/Fb (IV7). This theme will appear later in the tune in different keys and built on different degrees of the scale.  The Fb pedal point leads into the backdoor-mediant turnaround, resolving back to the Ebm7 figure. Apart from the Ab5 chord, the root movement in this section - Gb–Cb–Fb–A - moves clockwise around the circle of fifths, with a functional resolution to Ebm7 at the end. In comparison to the opening section, the harmony is becoming more functional as the tune heads towards the verse.</p>

      <div class="example">
        <div id="osmd-BSIntro5"></div>
      </div>

      <p>This section repeats and, on the second repetition, the recurring Ebm7 figure resolves down to Bbm, shifting its function from the ii7 of Db to the iv7 of Bb. This creates another iv7-i motion into the verse.</p>

      <h2 id="part-three">
        <div class="pre-heading">Part Three</div>
        <div class="heading">Verse One</div>
      </h2>
        
      <aside>
        <h3>Summary</h3>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="5">Verse (Bb)</th>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="1" rowspan="1">Cm7</td>
              <td colspan="1" rowspan="1">Eb9</td>
              <td colspan="1" rowspan="1">Eb13</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Ab/Db</td>
              <td colspan="1" rowspan="1">Ab13</td>
              <td colspan="1" rowspan="1">Gbmaj13</td>
              <td colspan="1" rowspan="1">Bbm7</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="1" rowspan="1">Cm7</td>
              <td colspan="1" rowspan="1">Ebmaj13/D</td>
              <td colspan="1" rowspan="1">Bbm7</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="1" rowspan="1">Cm7</td>
              <td colspan="1" rowspan="1">Eb/F</td>
              <td colspan="1" rowspan="1">Bbmaj9</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">E7b9</td>
              <td colspan="1" rowspan="1">Ebmaj13</td>
              <td colspan="1" rowspan="1">A7#9#5</td>
              <td colspan="1" rowspan="1" class="hide-border"></td>
            </tr>
            <tr>
              <th colspan="1" rowspan="1">Chorus (Bb)</th>
              <td colspan="1" rowspan="1">Dm7…</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
          </tbody>
        </table>
      </aside>

      <p>The verse follows an irregular 19 bar form. As previously outlined, it modulates from Bb minor to Bb major via the successive modes of the diatonic scale.</p>

      <div class="example">
        <div id="osmd-BSVerseOne1"></div>
      </div>

      <p>The verse starts with a Bbm7–Cm7– Eb9–Eb13 (i7–ii7–IV7) progression. This progression is a recurring theme in the verse, with the Eb chord varying each time.  Eb9–Eb13, functioning as a single IV7 chord, also acts as a secondary dominant to the first chord of the next section, Ab/Db. A Bb minor triad is outlined in the melody over the Bbm7 chord, seemingly setting up a strong minor tonality. However, this is undermined by the Cm7, Eb9 and Eb13 chords, which all contain a G♮, briefly introducing a Dorian sound in the harmony.</p>

      <div class="example">
        <div id="osmd-BSVerseOne2"></div>
      </div>

      <p>The next section starts with an ambiguous chord, Ab/Db. The preceding Eb13 chord resolves to the Ab triad in the upper structure, however the Db in the bass makes this chord function as a Dbmaj7sus2, the bIII in Bbm. Melodically, the phrase here lands on a Bb, which is in neither the Ab or Db triad. The remainder of the chords in this section are diatonic to Bb minor, as is the melody. The descending Ab13–Gbmaj13 progression seems to be resolving to Db, but instead returns to the Bbm chord in the last bar.</p>

      <div class="example">
        <div id="osmd-BSVerseOne3"></div>
      </div>

      <p>The next section starts with another Bbm7–Cm7–Eb progression, again with a Bbm triad outlining the Bbm7 chord. However, this phrase rises to a G♮ over the Cm7 chord, moving the melody into a Bb Dorian modality. The next bar contains the kind of passing chord that defies easy classification. It is a cluster chord with C, Eb, F and G in the upper structure and D in the bass. Given the recurrence of an Eb chord in this third bar, it could be viewed as a Ebmaj13 chord in the third inversion, Ebmaj13/D (IV∆). The melody over this chord also outlines the first three notes of the Eb major scale. The introduction of D♮ moves briefly moves the harmony into a Mixolydian or Ionian modality, before returning back to another Bbm7 chord.</p>

      <div class="example">
        <div id="osmd-BSVerseOne4"></div>
      </div>

      <p>The next section starts with another Bbm7–Cm7–Eb progression. This time the Eb is an Eb/F, a V7sus chord resolving to the I chord, Bbmaj9 (i7–ii7–V7sus–I∆). The arrival of this chord completes the shift to a major tonality. Although the melody now contains the major third, the flattened seventh makes the melodic line Bb Mixolydian. An A♮ is introduced into the harmony in the Bbmaj9 chord, shifting the harmony to Bb Ionian.</p>

      <div class="example">
        <div id="osmd-BSVerseOne5"></div>
      </div>

      <p>The verse concludes with a E7b5–Ebmaj13–A7#9#5 progression. The E7b5 is <a target="_blank" href="https://en.wikipedia.org/wiki/Tritone_substitution">tritone substitute</a> for Bb7, the <a target="_blank" href="https://en.wikipedia.org/wiki/Secondary_chord">secondary dominant</a> to the Ebmaj13 (bII/IV–IV∆). The final chord is an A7#9#5 chord, acting as a secondary dominant to Dm7, the first chord of the chorus (V7alt/iii–iiim7). The melody in this section now contains an A♮, completing the shift from Bb minor to major.</p>

      <p>The shift in tone from dark to bright is reflected in the lyrics. In the first verse the narrator seems irritable and paranoid:</p>

      <blockquote>
        “Drive West on Sunset to the sea,</br>
        Turn that jungle music down,</br>
        Just until we’re out of town.”
      </blockquote>

      <p>As the musical content of the verse brightens, so does the narrator’s attitude towards the encounter that awaits:</p>

      <blockquote>
        “This is no one night stand, it’s a real occasion.</br>
        Close your eyes and you’ll be there,</br>
        It’s everything they say,</br>
        The end of a perfect day,</br>
        Distant lights from across the bay.”
      </blockquote>

      <h2 id="part-four">
        <div class="pre-heading">Part Four</div>
        <div class="heading">Chorus One</div>
      </h2>

      <aside>
        <h3>Summary</h3>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="5">Chorus (Bb)</th>
              <td colspan="1" rowspan="1">Dm7</td>
              <td colspan="1" rowspan="1">%</td>
              <td colspan="1" rowspan="1">Eb F7/Eb</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Dm7</td>
              <td colspan="1" rowspan="1">%</td>
              <td colspan="1" rowspan="1">Eb F7/Eb</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">C9</td>
              <td colspan="1" rowspan="1">F9</td>
              <td colspan="1" rowspan="1">Bbmaj7</td>
              <td colspan="1" rowspan="1">Bbm7 Eb9</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Dm7</td>
              <td colspan="1" rowspan="1">C9</td>
              <td colspan="1" rowspan="1">Eb F7/Eb</td>
              <td colspan="1" rowspan="1">%</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Cb/Fb Gb7/Fb</td>
              <td colspan="2" rowspan="1">Db/Gb Ab7/Gb Bb7b9</td>
              <td colspan="1" rowspan="1" class="hide-border"></td>
            </tr>
            <tr>
              <th colspan="1" rowspan="1">Bridge (Db)</th>
              <td colspan="1" rowspan="1">Bbm7…</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
          </tbody>
        </table>
      </aside>

      <p>The chorus consists of a sixteen bar section that follows an AABA structure. This is followed by a two bar key change into the bridge. The harmony and the melody in the chorus is mostly in the key of Bb major.</p>

      <div class="example">
        <div id="osmd-BSChorusOne1"></div>
      </div>

      <p>The A section starts on the iii chord, Dm7. After the relatively full chord voicings of the verse, the chorus returns to the sparse arrangement of the introduction. The bass, piano and vocal introduce the “Babylon Sisters” line in unison, before the vocals fill out the full Dm7 chord on the word “sisters”. In the third bar there is another instance of the “Shake It” line, this time appearing as a Eb–F7/Eb pair (IV–V). After the Dm7 chord, the appearance of the IV and V chords re-establishes Bb major rather than D minor as the tonal center for the chorus. This A section repeats twice.</p>

      <div class="example">
        <div id="osmd-BSChorusOne2"></div>
      </div>

      <p>The B section of the chorus brings back four-note voicings into the harmony. The progression is C9–F9–Bbmaj7 (V7/V–V7–I∆7), where C9 is a secondary dominant to F9. The Bbmaj7 chord switches to Bbm7, becoming a pre-dominant chord to the Eb9, a secondary dominant leading back to Dm7, the iii7. The melody over this section exploits the chromatic differences between chords (E♮ in C9 to Eb in F9, D♮ in Bbmaj7 to Db in Bbm7). In both these cases, the flattened notes are from the Bb <a target="_blank" href="https://en.wikipedia.org/wiki/Blues_scale">blues scale</a>.</p>

      <div class="example">
        <div id="osmd-BSChorusOne3"></div>
      </div>

      <p>The next four bars are an instrumental variation of the A section. A C9 is added in the second bar, which functions as a secondary dominant to the F/Eb chord.</p>

      <div class="example">
        <div id="osmd-BSChorusOne4"></div>
      </div>

      <p>The transition from the chorus to the bridge is one of the more harmonically complex parts of the tune. The progression is Cb/Fb–Gb/Fb–Db/Gb–Ab/Gb–Bb7b9. The first bar of the bridge starts with an Ebm7 chord, so the Bb7b9 is a secondary dominant to that chord. The chords leading up to it can be viewed as a backdoor progression (bVI–bVII–I). The bVI chord, Gb7/Fb, is preceded by Cb/Fb, which is behaving like a suspension of the Gb7/Fb chord (bVI7sus–bVI7). The bVII chord, Ab7/Gb, is preceded by a similar chord, Db/Gb, also behaving like a suspension of Ab7/Gb (bVII7sus–bVII7). This resolves to the tonic. Despite the unusual chords in this section, there is a strong sense of harmonic resolution leading into the bridge.</p>

      <h2 id="part-five">
        <div class="pre-heading">Part Five</div>
        <div class="heading">Bridge One</div>
      </h2>

      <aside>
        <h3>Summary</h3>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="3">Bridge (Db)</th>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">Db6</td>
              <td colspan="1" rowspan="1">Cbmaj7 Cb7</td>
              <td colspan="1" rowspan="1">Fb6/9 A7b5</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">Db/Eb Ab/Bb</td>
              <td colspan="1" rowspan="1">Ebm7 Bb7b9</td>
              <td colspan="1" rowspan="1">Ebø7 Bbm7</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">Bbm7</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
            <tr>
              <th colspan="1" rowspan="1">Verse (Bb)</th>
              <td colspan="1" rowspan="1">Bbm7…</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
          </tbody>
        </table>
      </aside>

      <div class="example">
        <div id="osmd-BSBridgeOne1"></div>
      </div>

      <p>The four-bar bridge shifts key back to Db major, with some borrowed chords from Db minor. The bridge starts with a descending Ebm7–Db6–Cbmaj7–Cb7 progression (ii7–I6–bVII∆–bVII7). The Cb7 is a secondary dominant to Fb6/9, which in turn is the first chord of the backdoor-mediant turnaround, resolving to Ebm7 (bIV/bVII–bVII/bVII–ii7). Over this section the melody remains diatonic to the key.</p>

      <div class="example">
        <div id="osmd-BSBridgeOne2"></div>
      </div>

      <p>The next section only appears in the tune once. Heading back to the key of Bb for verse, the chords cycle through different variations of the ii and V7/ii chord. The first pair is Db/Eb–Ab/Bb (II7sus–V7sus/ii). The next pair is Ebm7–Bb7(b9) (ii7–V7/ii). Finally an Ebm7(b5) chord resolves back to a Bbm7 chord leading back into verse, shifting its function from the ii of Db to the iv of Bb.

      <h2 id="part-six">
        <div class="pre-heading">Part Six</div>
        <div class="heading">Verse and Chorus Two</div>
      </h2>

      <p>The second verse is harmonically identical to the first verse, with slight changes to the melody to accommodate the lyric. In the first verse, the lyric reflected the shift from minor to major – the narrator was reticent about the encounter with the Babylon Sisters in the darker first eight bars before hyperbolically extolling the virtues in the brighter last eleven bars. This is flipped in the second verse. Over the darker tonality, the narrator expresses his excitement about this encounter, while over the brighter tonality the narrator acknowledges that the encounter is a bad idea. This is an inventive way of reflecting the ambivalence of the narrator in this music:</p>

      <p><strong>Aeolian Mode</strong></p>
      <blockquote>
        We'll jog with show folk on the sand<br>
        Drink kirschwasser from a shell<br>
        San Francisco show and tell
      </blockquote>

      <p><strong>Shift towards Ionian Mode</strong></p>
      <blockquote>
        Well I should know by now<br>
        That it's just a spasm<br>
        Like a Sunday in T.J.<br>
        That it's cheap but it's not free<br>
        That I'm not what I used to be<br>
        And that love's not a game for three<br>
      </blockquote>

      <p>The second chorus is a repeat of the first musically and lyrically, ending with the same key change towards the bridge.</p>

      <h2 id="part-seven">
        <div class="pre-heading">Part Seven</div>
        <div class="heading">Bridge Two</div>
      </h2>

      <aside>
        <h3>Summary</h3>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="1">Bridge (Db)</th>
              <td colspan="1" rowspan="1">Ebm7</td>
              <td colspan="1" rowspan="1">Db6</td>
              <td colspan="1" rowspan="1">Cbmaj7 Cb7</td>
              <td colspan="1" rowspan="1">Fb6/9 F7</td>
            </tr>
            <tr>
              <th colspan="1" rowspan="1">Solo (Bb)</th>
              <td colspan="1" rowspan="1">Bbm7…</td>
              <td colspan="3" rowspan="1" class="hide-border"></td>
            </tr>
          </tbody>
        </table>
      </aside>

      <div class="example">
        <div id="osmd-BSBridgeTwo1"></div>
      </div>

      <p>The second bridge follows the first melodically. However, instead of the backdoor-mediant resolution in the last bar, the A13b5 is replaced with an F7, resolving straight back to Bbm7 for the start of the solo. The A13b5 shares some common tones with F7 (A and Eb) but the function here is different.</p>

      <h2 id="part-eight">
        <div class="pre-heading">Part Eight</div>
        <div class="heading">Solo, Verse and Chorus Three</div>
      </h2>

      <div class="example">
        <div id="osmd-BSSolo1"></div>
      </div>

      <p>The trumpet solo, played by Randy Brecker, falls over the first part of the verse changes and uses the Bb minor scale. A shorter third verse takes over the other half of the verse structure. This time around there is no part extolling the positives of the encounter. The lyric states in unequivocal terms what a bad idea it is - “son you’re playing with fire”, “bridges burn from the point of no return”.</p>

      <p>The third and final chorus is the same as the other choruses. However, instead of the transition into the bridge the tune moves straight into the coda.</p>

      <h2 id="part-nine">
        <div class="pre-heading">Part Nine</div>
        <div class="heading">Coda</div>
      </h2>

      <aside>
        <table>
          <tbody>
            <tr>
              <th colspan="1" rowspan="2">Outro (Bb)</th>
              <td colspan="1" rowspan="1">Dm7</td>
              <td colspan="1" rowspan="1">%</td>
              <td colspan="1" rowspan="1">F G7/F</td>
              <td colspan="1" rowspan="1">Eb Dm7</td>
            </tr>
            <tr>
              <td colspan="1" rowspan="1">(Dm7)</td>
              <td colspan="1" rowspan="1"></td>
              <td colspan="1" rowspan="1">Eb F/Eb</td>
              <td colspan="1" rowspan="1">Eb Ab7b5</td>
            </tr>
          </tbody>
        </table>
      </aside>

      <div class="example">
        <div id="osmd-BSCoda1"></div>
      </div>

      <p>The outro is a repeated variation on the harmonic structure of the chorus. The first variation is a transposition of the “Shake It” riff up a tone to F–G7/F (V–VI7). This moves the dominant of Bb, F, into the bass as well as ramping up the perceived tension of this theme. The harmony then moves to a figure in Eb then back to Dm7 (IV7–iii). In the next eight bars, the “Shake It” riff returns a whole tone lower, over Eb–F7/Eb. The section ends with a backdoor-mediant turnaround resolving to Dm7.</p>

      <div class="example">
        <div id="osmd-BSCoda2"></div>
      </div>

      <p>On the second repetition of this section a vocal tag appears over the backdoor-mediant turnaround, ascending and descending a part of mixolydian mode (D–F–G–Ab–G–F etc.). After shifting between minor and major throughout the tune, it is interesting that the final vocal phrase lands somewhere in between the two, a bluesy sound that exploits the tension between the natural third and flattened seventh. This leads into a 50 second extended fade out.</p>
    </main>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/opensheetmusicdisplay/build/opensheetmusicdisplay.min.js"></script>

  <script src="script.js"></script>
</body>
</html>