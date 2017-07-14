var q11 = {
    location: "Sydney",
    joist: {
        span: 3,
        depth: 140,
        width: 35,
        centres: 450
    },
    bearer: {
        span: 1.9,
        depth: 140,
        width: 35
    },
    deadload: 0.3,
    liveload: 0.7,
    answer: [
        [0.714, 1.058],
        [0.953, 6.115],
        [0.953, 17.64],
        [5.218, 10],
        "smaller",
        [0.954, 1.761],
        [2.009, 9.513],
        [2.009, 35.28],
        [2, 10],
        "smaller"
    ]
};

var q12 = {
    location: "Brisbane",
    joist: {
        span: 3.1,
        depth: 140,
        width: 45,
        centres: 450
    },
    bearer: {
        span: 2,
        depth: 140,
        width: 45
    },
    deadload: 0.4,
    liveload: 0.8,
    answer: [
        [0.908, 1.756],
        [1.172, 7.86],
        [1.172, 29.16],
        [5.891, 10.333],
        "smaller",
        [1.302, 2.656],
        [2.604, 12.23],
        [2.604, 45.36],
        [2.511, 10],
        "smaller"
    ]
};

var q13 = {
    location: "Melbourne",
    joist: {
        span: 3.2,
        depth: 140,
        width: 35,
        centres: 450
    },
    bearer: {
        span: 2.1,
        depth: 140,
        width: 35
    },
    deadload: 0.5,
    liveload: 0.9,
    answer: [
        [1.124, 1.028],
        [1.405, 6.115],
        [1.405, 17.64],
        [10.44, 10.667],
        "larger",
        [1.72, 1.685],
        [3.276, 9.513],
        [3.276, 35.28],
        [4.918, 10],
        "larger"
    ]
};

var q14 = {
    location: "Darwin",
    joist: {
        span: 3.3,
        depth: 140,
        width: 45,
        centres: 600
    },
    bearer: {
        span: 2.2,
        depth: 140,
        width: 45
    },
    deadload: 0.6,
    liveload: 1,
    answer: [
        [1.813, 1.494],
        [2.198, 7.076],
        [2.198, 26.244],
        [14.406, 11],
        "larger",
        [2.216, 2.323],
        [4.029, 11.007],
        [4.029, 40.824],
        [5.589, 10],
        "yes"
    ]
};

var q15 = {
    location: "Adelaide",
    joist: {
        span: 3.4,
        depth: 140,
        width: 45,
        centres: 450
    },
    bearer: {
        span: 2.3,
        depth: 140,
        width: 45
    },
    deadload: 0.7,
    liveload: 1.1,
    answer: [
        [1.62, 1.716],
        [1.906, 7.862],
        [1.906, 29.16],
        [14.002, 11.333],
        "yes",
        [2.799, 2.544],
        [4.868, 12.23],
        [4.868, 45.36],
        [7.912, 10],
        "larger"
    ]
};

var q21 = {
    location: "Sydney",
    element: {
        length: 2,
        depth: 120,
        width: 120
    },
    load: 100,
    boltsize: "M12",
    holesize: 14,
    answer: [
        [100, 134.931],
        [100, 286.894],
        "smaller"
    ]
};

var q22 = {
    location: "Brisbane",
    element: {
        length: 2.2,
        depth: 150,
        width: 150
    },
    load: 200,
    boltsize: "M14",
    holesize: 16,
    answer: [
        [200, 216.329],
        [200, 487.750],
        "yes"
    ]
};

var q23 = {
    location: "Melbourne",
    element: {
        length: 2.4,
        depth: 180,
        width: 180
    },
    load: 300,
    boltsize: "M16",
    holesize: 18,
    answer: [
        [300, 307.29],
        [300, 740.507],
        "yes"
    ]
};

var q24 = {
    location: "Darwin",
    element: {
        length: 2.6,
        depth: 210,
        width: 210
    },
    load: 400,
    boltsize: "M18",
    holesize: 20,
    answer: [
        [400, 371.226],
        [400, 916.283],
        "larger"
    ]
};

var q25 = {
    location: "Adelaide",
    element: {
        length: 2.8,
        depth: 240,
        width: 240
    },
    load: 500,
    boltsize: "M20",
    holesize: 22,
    answer: [
        [500, 531.516],
        [500, 1329.754],
        "yes"
    ]
};

var q1 = [q11, q12, q13, q14, q15];
var q2 = [q21, q22, q23, q24, q25];