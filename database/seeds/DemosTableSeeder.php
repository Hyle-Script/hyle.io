<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Demo;

class DemosTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		//
		DB::table('demos')->truncate();
		Demo::create([
			'title'       => 'Wood Texture',
			'description' => 'Applies a basic wood texture on selected layers.',
			'image'       => '13842166734812_wood.png',
			'category_id' => 1,
			'user_id'     => 1,
			'code'        => 'effects:
  - type: fractal noise
    properties:
      fractal type: 9
      noise type: 2
      uniform scaling: false
      scale height: 900
      complexity: 10
      sub influence (%): 90
      sub scaling: 60
  - type: tint
    properties:
      map black to: 9A6541
      map white to: 261A12'
		]);

		Demo::create([
			'title'       => 'Isometric Grid',
			'description' => 'Applies a transform effect affecting scale, skew and rotation properties to create isometry.',
			'image'       => '13842299657583_isometry.png',
			'category_id' => 1,
			'user_id'     => 1,
			'code'        => 'layers:
  - type: solid
    width: 800
    height: 800
    effects:
      - type: grid
        properties:
          anchor: [0, 0]
          corner: [50, 50]
      - name: Isometry
        type: transform
        properties:
          uniform scale: false
          scale width: 86.062
          skew: 30
          skew axis: 45
          rotation: 30'
		]);

		Demo::create([
			'title'       => 'Scale and spin with inertia',
			'description' => 'Will apply spinning and scaling animation with inertia controls to selected layers.

Expression taken from: [motion-graphics-exchange.com/after-effects/Wiggle-rubber-bounce-throw-inertia-expressions/4ad0f32a944ad](http://www.motion-graphics-exchange.com/after-effects/Wiggle-rubber-bounce-throw-inertia-expressions/4ad0f32a944ad)',
			'image'       => '13842165991065_spin-scale-inertia.gif',
			'category_id' => 2,
			'user_id'     => 1,
			'code'        => 'effects:
  - type: slider control
    name: Amplitude
    properties:
      slider: .05
  - type: slider control
    name: Frequency
    properties:
      slider: 2
  - type: slider control
    name: Decay
    properties:
      slider: 4
  - type: transform
    properties:
      scale:
        expression: |
          n = 0;
          if (numKeys > 0) {
            n = nearestKey(time).index;
            if (key(n).time > time) {
              n--;
            }
          }
          if (n == 0) {
            t = 0;
          } else {
            t = time - key(n).time;
          }
          if (n > 0) {
            v = velocityAtTime(key(n).time - thisComp.frameDuration/10);
            amp = effect(\"Amplitude\")(\"Slider\");
            freq = effect(\"Frequency\")(\"Slider\");
            decay = effect(\"Decay\")(\"Slider\");
            value + v*amp*Math.sin(freq*t*2*Math.PI)/Math.exp(decay*t);
          } else {
            value;
          }
        keyframes:
          - time: 0
            value: 0
          - time: .5
            value: 100
      rotation:
        expression: |
          n = 0;
          if (numKeys > 0) {
            n = nearestKey(time).index;
            if (key(n).time > time) {
              n--;
            }
          }
          if (n == 0) {
            t = 0;
          } else {
            t = time - key(n).time;
          }
          if (n > 0) {
            v = velocityAtTime(key(n).time - thisComp.frameDuration/10);
            amp = effect(\"Amplitude\")(\"Slider\");
            freq = effect(\"Frequency\")(\"Slider\");
            decay = effect(\"Decay\")(\"Slider\");
            value + v*amp*Math.sin(freq*t*2*Math.PI)/Math.exp(decay*t);
          } else {
            value;
          }
        keyframes:
          - time: 0
            value: -180
          - time: .5
            value: 0'
		]);

		Demo::create([
			'title'       => 'Folder structure',
			'description' => 'Creates a basic folder structure.',
			'image'       => '13842166952340_structure.png',
			'category_id' => 3,
			'user_id'     => 1,
			'code'        => 'folders:
  - Assets
  - | Audio
  - | | Voice Over
  - | | Score
  - | | FX
  - | Stills
  - | | Bitmaps
  - | | Vector
  - | | 3D
  - | Video
  - | | Prerenders
  - | | Stock
  - | | Shooting
  - Comps
  - | Scenes
  - | Elements'
		]);

		Demo::create([
			'title'       => 'Blueprint',
			'description' => 'Applies a blueprint texture on selected layers.',
			'image'       => '13842174771693_blueprint.png',
			'category_id' => 1,
			'user_id'     => 1,
			'code'        => 'effects:
  - type: fill
    properties:
      color: 2F4E81
  - type: grid
    properties:
      anchor: [-1, -1]
      corner: [9, 9]
      border: 1
      blending mode: 2
      opacity: 15
  - type: grid
    properties:
      anchor: [-1, -1]
      corner: [49, 49]
      border: 1
      blending mode: 2
      opacity: 30
  - type: grid
    properties:
      anchor: [-1, -1]
      corner: [99, 99]
      border: 1
      blending mode: 2
      opacity: 50'
		]);

		Demo::create([
			'title'       => 'Drop and Bounce',
			'description' => 'Applies a transform effect to make Y position drop and bounce.

Expression inspired by this article [motionscript.com/articles/bounce-and-overshoot.html#kf-bounce-back](http://www.motionscript.com/articles/bounce-and-overshoot.html#kf-bounce-back).',
			'image'       => '13843580984035_drop-and-bounce.gif',
			'category_id' => 1,
			'user_id'     => 1,
			'code'        => 'effects:
  - type: transform
    properties:
      anchor point: [0, 0]
      position:
        keyframes:
          - time: 0
            value: [0, -300]
          - time: .4
            value: [0, 0]
        expression: |
          e = .7;
          g = 4000;
          nMax = 9;
           
          n = 0;
          if (numKeys > 0){
            n = nearestKey(time).index;
            if (key(n).time > time) n--;
          }
          if (n > 0){
            t = time - key(n).time;
            v = -velocityAtTime(key(n).time - .001)*e;
            vl = length(v);
            if (value instanceof Array){
              vu = (vl > 0) ? normalize(v) : [0,0,0];
            }else{
              vu = (v < 0) ? -1 : 1;
            }
            tCur = 0;
            segDur = 2*vl/g;
            tNext = segDur;
            nb = 1; // number of bounces
            while (tNext < t && nb <= nMax){
              vl *= e;
              segDur *= e;
              tCur = tNext;
              tNext += segDur;
              nb++
            }
            if(nb <= nMax){
              delta = t - tCur;
              value +  vu*delta*(vl - g*delta/2);
            }else{
              value
            }
          }else
            value
'
		]);

		Demo::create([
			'title'       => 'Compositions nesting and footage import',
			'description' => 'Creates a simple nested structure of compositions and imports a file in one of them.',
			'image'       => '13843677949517_comp-structure-with footage.png',
			'category_id' => 3,
			'user_id'     => 1,
			'code'        => 'compositions:
  - name: Project
  - name: Sequence
    composition: Project
  - name: Scene
    composition: Sequence
  - name: Shot
    composition: Scene
    layers:
      - file: /path/to/file.mov'
		]);

		Demo::create([
			'title'       => 'Opacity jittering in',
			'description' => 'Applies a transform effect with opacity flashing between 0 and 100 until X time.',
			'image'       => '13843713258107_flash-in.gif',
			'category_id' => 2,
			'user_id'     => 1,
			'code'        => 'effects:
  - type: transform
    properties:
      opacity:
        expression: |
          transitionTime = 1;
          if (time - inPoint < transitionTime) {
            (random() < 0.5 ? 0 : 100);
          } else {
            100;
          }'
		]);

		Demo::create([
			'title'       => 'Sunburst',
			'description' => 'Creates a sunburst like effect with a shape layer.',
			'image'       => '13904438917902_sunburst.png',
			'category_id' => 1,
			'user_id'     => 1,
			'code'        => 'layers:
  - type: shape
    name: sunburst
    contents:
      - type: group
        name: Triangle
        contents:
          - type: polystar
            points: 3
            position: [0, -100]
            rotation: [0, 180]
            outer radius: 100
            rotation: 180
          - type: fill
            color: ffffff
        transform:
          scale: [20, 500]
      - type: repeater
        copies: 36
        transform:
          rotation: 10'
		]);
	}
}
