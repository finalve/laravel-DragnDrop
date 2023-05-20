$(document).ready(function () {
    // ตั้งค่าการลากและวางสำหรับองค์ประกอบที่มีคลาส "draggable"
    $(".draggable").on("dragstart", function (event) {
        event.originalEvent.dataTransfer.setData("text/plain", event.target.id);
    });

    // ตั้งค่าการวางสำหรับองค์ประกอบที่มีคลาส "droppable" ใน "subCanvas"
    $("#Canvas").on("dragover", function (event) {
        event.preventDefault();
    });

    $("#Canvas").on("drop", function (event) {
        event.preventDefault();
        var draggedElementId = event.originalEvent.dataTransfer.getData("text/plain");
        var draggedElement = $("#" + draggedElementId).clone();

        // ตรวจสอบว่าองค์ประกอบที่วางลงมาเป็น "select" หรือไม่
        switch (draggedElement.attr("id")) {
            case 'select':
                $(this).append(`
                <select name="" id="" class="form-control">
                    <option value="">1</option>
                    <option value="">2</option>
                </select>`);
                break;
            case 'textarea':
                $(this).append(`
                <textarea rows="" cols=""></textarea>
             `);
                break
            case 'textarea':
                $(this).append(`
                <textarea rows="" cols=""></textarea>
             `);
                break
            case 'checkbox':
                $(this).append(`
                <form>
                <input type="radio" name="colors" id="red">Red<br>
                <input type="radio" name="colors" id="blue">Blue
                </form>
                `);
                break
            case 'button':
                $(this).append(`
                <button>btn</button>
                `);
                break                    
            default:
                break;
        }
    });


});
