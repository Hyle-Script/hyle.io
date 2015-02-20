## Items

### Compositions

The `compositions` property allows to define an array of compositions. Here the code to **store** a basic composition in your project panel. [See all compositions properties](/docs/commands-list#composition).

    compositions:
      - name: My first composition
        width: 1280
        height: 720
        pixel aspect: 1
        duration: 10
        framerate: 24
        color: 000000

Use the `composition` property if you want to nest your composition as a layer inside of another composition.

    compositions:
      - name: The master comp
      - name: The child comp
        composition: The master comp

<p class="info">The examples above are really short and do not list all properties. Hyle will fall back to the its default properties if a property isn't mentioned. The default values are all listed in the <a href="/docs/commands-list">commands list page</a>.</p>
### Folders

The `folders` property will allow you to create folder with the provided eased syntax. [See all folders properties](/docs/commands-list#folder).

    folders:
      - folder 1
      - | folder 1.1
      - | | folder 1.1.1
      - | folder 1.2
      - folder 2
      - | folder 2.1
      - folder 3

The eased syntax is optional, you can also use the usual syntax.

    folders:
      - name: folder 1
      - name: folder 1.1
        folder: folder 1
      - name: folder 1.1.1
        folder: folder 1.1
      - name: folder 2
      - name: folder 2.1
        folder: folder 2
      - name: folder 3

### Files

#### As items

The keyword `files` will be used specify an array of files to import in the project. 

Use `file: file name` to stage it as a layer in a composition.

    files:
      - path: /absolute/path/to/image.jpg
      - path: /path/to/another/song.wav
    compositions:
      - name: My Composition
        layers:
          - file: image.jpg
          - file: song.wav

You can also attribute IDs to each of your files if you prefer.

    files:
      - path: /absolute/path/to/image.jpg
        id: My image
      - path: /path/to/another/song.wav
        id: 1
    compositions:
      - name: My Composition
        layers:
          - file: My image
          - file: 1

Use `sequence: true` if you want to import a file sequence instead of a single file.

    files:
      - path: /absolute/path/to/image-sequence-file_0001.jpg
        sequence: true

#### As layers

You can also directly map files onto layers (without first importing the files via `files` keyword) by using this syntax:
  
    layers:
      - file: /path/to/file.mov
      - file: /path/to/another/song.wav

<p class="info info-warning">This technique is not recommended if you plan on making multiple uses of the same file.</p>
