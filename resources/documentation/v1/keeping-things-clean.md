## Keeping things clean

### Using IDs

We have yet only referenced items and layers with their name and this can quickly get risky. Using IDs fix that.

    layers: 
      - name: Some Layer
        id: 1
      - name: Child layer
        parent: 1

You can also give named IDs if you prefer.

    layers: 
      - name: Some Layer
        id: super special layer
      - name: Child layer
        parent: super special layer

### Overwriting defaults

Hyle has its own default values as outlined in the [commands list page](/docs/commands-list), here's how to overwrite them.

    defaults:
      items:
        comment: Special comment on folders and compositions.
      layers:
        font size: 50
        width: 50
        transform: 
          anchor point: 
            expression: "[width/2, height/2]"
          position: [0, 0]

### Inheritance

The `inherit` property will copy the properties from a targeted layer.

    layers:
      - type: Text
        id: 1
        text: Some text
        font: Helvetica Neue
        font size: 60
        transform: 
          scale: [50, 50]
      - inherit: 1
        text: Different text

### Fetching

The `fetch` property will allow you to fetch a composition into another.

    compositions: 
      - name: The fetched comp
        id: 1
      - name: The main comp
        layers: 
          - fetch: 1