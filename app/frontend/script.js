//Bearer
const api_key = "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5ZDM4YzRlYi1hZWIzLTQ1OWUtYjA4ZC02YzNiNGUwMmNlZTgiLCJqdGkiOiIxZDM5MGI4Mzg1NTY5ODJjNGU3MWEyYmIwMGY2MDFiYTg5ZTdhZjE4MmZmNWFkOGVkYzUzNzczMzNhZDc3MWRlNzRjNjc2NGY3MmUwNzU5MiIsImlhdCI6MTcyODY3MTk5MS43ODgzOCwibmJmIjoxNzI4NjcxOTkxLjc4ODM4NSwiZXhwIjoxNzYwMjA3OTkxLjc3MDM4Miwic3ViIjoiIiwic2NvcGVzIjpbXX0.sinudkS56o19_txz4e61wlPMjkj2xp8yj-98hKysvKxfYFem9yRJYRBCVjkdhqiMshia0AKNGjnHLmP6dCOOp5oy0kKxvE0hAlos33udVf41Oq0Ij9kiwfu9nNNdxUWPiF4kpxyOxz9cnXZYAuHkbR8cGwnG7ePLrGtK1kP88ZudZz1G9NrRClyJLmidbJsIAfNREzoNzpfXnGIpcJ9JH8HQSO9UkfJMFFNQt2gq3DJYuqYGw-xALeV8lLTvg4PxR6kEow3-7Z2rZ03vipzbJDR4WxgoEQ0-5_Q5XQZxLwG85ibr5sLZsctl3HRRK1370tSKLxToGtGASCsKy6N8nOOTi6vOTESHUK3cAWxAh9h6C3rAzsMX-BsZOc0ChzZEf4vayQ42U3BmYOIFEYOQyB8VM6ypcYdREYiN55LsmXiXUklErEzzBia33dFO_UDOO1AquUZwp8fizz3tC8m9nNWEItmlOigzsHeYQ3g1U1uK0NMYensummnAg2yQQRTQphCL_WRcc-moC3cvYY5O0j1OVLi59C1tU_XQPuQ3fclKRttkJpXktryXmjrP5Vp_psd0sUJl67kjkl6vQ5sseDooWhn0nJMlAjbrCBmLbDaTObrmJpoGQYTprGYrWp0RKh6WyRPm054QW1_7po67KHhLOCGX8BMBoI2iQzxIYLk";
const url = `http://localhost:8000/api/products`;
// fetch
fetch(url, {
  method: "GET",
  credentials: "same-origin",
  headers: {
    "Accept" : "application/json",
    "Authorization" : api_key
  },
}).then((response) => {
   return response.json();
}).then((products) => {
    console.log(products);
}).catch(function(error) {
   console.log(error);
});
