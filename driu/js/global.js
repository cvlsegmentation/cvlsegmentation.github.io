    var seq_nframes = {"bear"                 : 82,
                       "blackswan"            : 50,
                       "bmxbumps"             : 90,
                       "bmxtrees"             : 80,
                       "boat"                 : 75,
                       "breakdance"           : 84,
                       "breakdanceflare"      : 71,
                       "bus"                  : 80,
                       "camel"                : 90,
                       "carroundabout"        : 75,
                       "carshadow"            : 40,
                       "carturn"              : 80,
                       "cows"                 : 104,
                       "dancejump"            : 60,
                       "dancetwirl"           : 90,
                       "dog"                  : 60,
                       "dogagility"           : 25,
                       "driftchicane"         : 52,
                       "driftstraight"        : 50,
                       "driftturn"            : 64,
                       "elephant"             : 80,
                       "flamingo"             : 80,
                       "goat"                 : 90,
                       "hike"                 : 80,
                       "hockey"               : 75,
                       "horsejumphigh"        : 50,
                       "horsejumplow"         : 60,
                       "kitesurf"             : 50,
                       "kitewalk"             : 80,
                       "libby"                : 49,
                       "lucia"                : 70,
                       "mallardfly"           : 70,
                       "mallardwater"         : 80,
                       "motocrossbumps"       : 60,
                       "motocrossjump"        : 40,
                       "motorbike"            : 43,
                       "paragliding"          : 70,
                       "paraglidinglaunch"    : 80,
                       "parkour"              : 100,
                       "rhino"                : 90,
                       "rollerblade"          : 35,
                       "scooterblack"         : 43,
                       "scootergray"          : 75,
                       "soapbox"              : 99,
                       "soccerball"           : 48,
                       "stroller"             : 91,
                       "surf"                 : 55,
                       "swing"                : 60,
                       "tennis"               : 70,
                       "train"                : 80};

    var techniques = ['bvs','fcp','jumpcut','hvs','seamseg','tsp','fastvideoseg',
                      'saliencyseg','keysegments','moseg','tracingdisco','cvos','nonlocalconsensus',
                      'saliencyfltcolor','saliencyfltmotion','mcg'];

    var tech_props = {"gt"               : {"display_name": "GT"    , "col_R" : 255, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "mcg"              : {"display_name": "MCG"   , "col_R" :   0, "col_G" :   0, "col_B" : 255, "currmask": undefined, "canv_resized": false},
                      "saliencyfltcolor" : {"display_name": "SF-LAB", "col_R" :   0, "col_G" :   0, "col_B" : 255, "currmask": undefined, "canv_resized": false},
                      "saliencyfltmotion": {"display_name": "SF-MOT", "col_R" :   0, "col_G" :   0, "col_B" : 255, "currmask": undefined, "canv_resized": false},
                      "nonlocalconsensus": {"display_name": "NLC"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "cvos"             : {"display_name": "CVOS"  , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "tracingdisco"     : {"display_name": "TRC"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "moseg"            : {"display_name": "MSG"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "keysegments"      : {"display_name": "KEY"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "saliencyseg"      : {"display_name": "SAL"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "fastvideoseg"     : {"display_name": "FST"   , "col_R" :   0, "col_G" : 255, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "tsp"              : {"display_name": "TSP"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "seamseg"          : {"display_name": "SEA"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "hvs"              : {"display_name": "HVS"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "jumpcut"          : {"display_name": "JMP"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "fcp"              : {"display_name": "FCP"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false},
                      "bvs"              : {"display_name": "BVS"   , "col_R" : 255, "col_G" :   0, "col_B" :   0, "currmask": undefined, "canv_resized": false}}


    var techn_papers ={
  "fcp": {
    "conference": "ICCV", 
    "authors": [
      "F. Perazzi", 
      "O. Wang", 
      "M. Gross", 
      "A. Sorkine-Hornung"
    ], 
    "year": 2015, 
    "title": "Fully Connected Object Proposals for Video Segmentation"
  }, 
  "cvos": {
    "conference": "CVPR", 
    "authors": [
      "B. Taylor", 
      "V. Karasev", 
      "S. Soatto"
    ], 
    "year": 2015, 
    "title": "Causal Video Object Segmentation from Persistence of Occlusions"
  }, 
  "sea": {
    "conference": "CVPR", 
    "authors": [
      "S. Avinash Ramakanth", 
      "R. Venkatesh Babu"
    ], 
    "year": 2014, 
    "title": "SeamSeg: Video Object Segmentation Using Patch Seams"
  },
    "bvs": {
    "conference": "CVPR", 
    "authors": [
      "N. Marki", 
      "F. Perazzi", 
      "O. Wang", 
      "A. Sorkine-Hornung"
    ], 
    "year": 2016, 
    "title": "Bilateral Space Video Segmentation"
  }, 
  "sal": {
    "conference": "CVPR", 
    "authors": [
      "W. Wang", 
      "J. Shen", 
      "F. Porikli"
    ], 
    "year": 2015, 
    "title": "Saliency-Aware Geodesic Video Object Segmentation"
  }, 
  "mcg": {
    "conference": "CVPR", 
    "authors": [
      "P. Arbelaez", 
      "J. Pont-Tuset", 
      "J. T. Barron", 
      "F. Marques", 
      "J. Malik"
    ], 
    "year": 2014, 
    "title": "Multiscale Combinatorial Grouping"
  }, 
  "trc": {
    "conference": "CVPR", 
    "authors": [
      "K. Fragkiadaki", 
      "G. Zhang", 
      "J. Shi"
    ], 
    "year": 2012, 
    "title": "Video segmentation by tracing discontinuities in a trajectory embedding"
  }, 
  "nlc": {
    "conference": "CVPR", 
    "authors": [
      "A. Faktor", 
      "M. Irani"
    ], 
    "year": 2012, 
    "title": "Video Segmentation by Non-Local Consensus voting"
  }, 
  "fst": {
    "conference": "ICCV", 
    "authors": [
      "A. Papazoglou", 
      "V. Ferrari"
    ], 
    "year": 2013, 
    "title": "Fast Object Segmentation in Unconstrained Video"
  }, 
  "key": {
    "conference": "ICCV", 
    "authors": [
      "Y. Lee", 
      "J. Kim", 
      "K. Grauman"
    ], 
    "year": 2011, 
    "title": "Key-segments for video object segmentation"
  }, 
  "msg": {
    "conference": "ICCV", 
    "authors": [
      "P. Ochs", 
      "T. Brox"
    ], 
    "year": 2011, 
    "title": "Object segmentation in video: A hierarchical variational approach for turning point trajectories into dense regions"
  }, 
  "sf-mot": {
    "conference": "CVPR", 
    "authors": [
      "F. Perazzi", 
      "P. Krahenbuhl", 
      "Y. Pritch", 
      "A. Hornung"
    ], 
    "year": 2012, 
    "title": "Saliency filters: Contrast based filtering for salient region detection"
  }, 
  "sf-lab": {
    "conference": "CVPR", 
    "authors": [
      "F. Perazzi", 
      "P. Krahenbuhl", 
      "Y. Pritch", 
      "A. Hornung"
    ], 
    "year": 2012, 
    "title": "Saliency filters: Contrast based filtering for salient region detection"
  }, 
  "jmp": {
    "conference": "SIGGRAPH", 
    "authors": [
      "Q. Fan", 
      "F. Zhong", 
      "D. Lischinski", 
      "D. Cohen-Or", 
      "B. Chen"
    ], 
    "year": 2015, 
    "title": "JumpCut: Non-Successive Mask Transfer and Interpolation for Video Cutout"
  }, 
  "hvs": {
    "conference": "CVPR", 
    "authors": [
      "M. Grundmann", 
      "V. Kwatra", 
      "M. Han", 
      "I. A. Essa"
    ], 
    "year": 2010, 
    "title": "Efficient hierarchical graph-based video segmentation"
  }, 
  "tsp": {
    "conference": "CVPR", 
    "authors": [
      "J. Chang", 
      "D. Wei", 
      "J. W. Fisher III"
    ], 
    "year": 2013, 
    "title": "A Video Representation Using Temporal Superpixels"
  }
};



