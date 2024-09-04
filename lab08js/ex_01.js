const matches = (obj, source) => {
    // รับคีย์ทั้งหมดของอ็อบเจ็กต์ที่สอง (source)
    const keys = Object.keys(source);
    // ตรวจสอบว่าคีย์ทั้งหมดมีอยู่ในอ็อบเจ็กต์แรก (obj) และมีค่าเท่ากันหรือไม่
    return keys.every(key =>
        obj.hasOwnProperty(key) && obj[key] === source[key]
    );
 };
 // ตัวอย่างการใช้งาน
 const object1 = { a: 1, b: 2, c: 3 };
 const object2 = { a: 1, b: 2, c:3 };
 console.log(matches(object1, object2)); // true
 console.log(matches(object1, { a: 1, b: 4, c: 3})); // false
 console.log(matches(object1, { a: 1, d: 2, c:2})); // false