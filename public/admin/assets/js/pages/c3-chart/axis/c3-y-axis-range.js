$(function() {
    var n = c3.generate({
        bindto: "#range-y-axis",
        size: { height: 400 },
        color: { pattern: ["#4fc3f7", "#E91E63"] },
        data: {
            columns: [
                ["Option", 250, 100, 400, 100, 200, 30]
            ]
        },
        axis: { y: { max: 400, min: -400 } },
        grid: { y: { show: !0 } }
    });
});