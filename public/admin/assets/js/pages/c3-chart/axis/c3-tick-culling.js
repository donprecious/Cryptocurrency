$(function() {
    var i = c3.generate({
        bindto: "#tick-culling",
        size: { height: 400 },
        color: { pattern: ["#4fc3f7", "#E91E63"] },
        data: {
            columns: [
                ["options", 30, 200, 100, 400, 150, 250, 30, 200, 100, 400, 150, 250, 30, 200, 100, 400, 150, 250, 200, 100, 400, 150, 250]
            ]
        },
        axis: { x: { type: "category", tick: { culling: { max: 4 } } } },
        grid: { y: { show: !0 } }
    });
});