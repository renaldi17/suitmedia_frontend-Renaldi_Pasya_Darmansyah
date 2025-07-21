<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ideas - Suitmedia</title>
  <link href="https://fonts.googleapis.com/css?family=Inter:400,600,700&display=swap" rel="stylesheet">
  <style>
    html, body { font-family: 'Inter', 'Segoe UI', Arial, sans-serif; background: #fafafa; color: #222; }
    body { margin: 0; }
    a { text-decoration: none; color: inherit; }
    /* Header orange bar & navbar */
    .header {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 110;
      background: #ff6a13;
      box-shadow: 0 2px 8px rgba(0,0,0,0.04);
      transition: background 0.3s;
      backdrop-filter: blur(8px);
    }
    .header .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
      height: 64px;
    }
    .logo {
      font-weight: bold;
      font-size: 1.5rem;
      color: #fff;
      letter-spacing: 1px;
      background: transparent;
      padding: 6px 18px 6px 12px;
      border-radius: 0 0 16px 0;
      box-shadow: none;
    }
    .logo span { color: #fff; font-weight: 400; }
    nav ul { display: flex; gap: 28px; list-style: none; margin: 0; padding: 0; }
    nav ul li a { padding: 7px 16px; border-radius: 6px; font-weight: 500; color: #fff; background: transparent; transition: background 0.2s, color 0.2s; position: relative; }
    nav ul li a.active, nav ul li a:hover { background: #fff; color: #ff6a13; }
    nav ul li a.active::after { content: ''; display: block; position: absolute; left: 0; right: 0; bottom: -7px; height: 3px; background: #fff; border-radius: 2px; }
    @media (max-width: 900px) { .header .container { padding: 0 10px; } nav ul { gap: 10px; } }
    @media (max-width: 600px) { .header .container { flex-direction: column; height: auto; } .logo { margin-bottom: 8px; } }
    /* Banner */
    .banner { position: relative; height: 320px; display: flex; align-items: flex-end; justify-content: center; overflow: hidden; margin-bottom: 32px; margin-top: 108px; }
    .banner-image { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: url('https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1200&q=80') center/cover no-repeat; z-index: 1; will-change: transform; transition: transform 0.3s; clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%); }
    .banner-text { position: relative; z-index: 2; text-align: center; color: #fff; margin-bottom: 40px; width: 100%; }
    .banner-text h1 { font-size: 2.8rem; font-weight: bold; letter-spacing: 1px; margin-bottom: 8px; }
    .banner-text p { font-size: 1.2rem; }
    @media (max-width: 700px) { .banner { height: 180px; margin-top: 90px; } .banner-text h1 { font-size: 1.5rem; } }
    /* Ideas List */
    .ideas-list { max-width: 1200px; margin: 0 auto; padding: 24px; }
    .ideas-controls { display: flex; align-items: center; justify-content: space-between; margin-bottom: 18px; flex-wrap: wrap; gap: 12px; }
    .ideas-controls .left { font-size: 0.98rem; color: #666; }
    .ideas-controls .right { display: flex; gap: 18px; align-items: center; }
    .ideas-controls label { font-size: 0.98rem; color: #666; margin-right: 4px; }
    .ideas-controls select { border: 1px solid #ddd; border-radius: 4px; padding: 4px 10px; font-size: 1rem; }
    .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; }
    .card { background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.06); overflow: hidden; display: flex; flex-direction: column; transition: box-shadow 0.2s; }
    .card:hover { box-shadow: 0 6px 24px rgba(0,0,0,0.10); }
    .card-thumb { width: 100%; aspect-ratio: 4/3; object-fit: cover; background: #eee; display: block !important; opacity: 1 !important; }
    .card-body { padding: 16px 14px 18px 14px; display: flex; flex-direction: column; flex: 1; }
    .card-date { font-size: 0.9rem; color: #ff6a13; margin-bottom: 6px; }
    .card-title { font-size: 1.1rem; font-weight: 600; margin-bottom: 8px; display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis; min-height: 3.6em; line-height: 1.2em; }
    .card-desc { font-size: 0.98rem; color: #555; flex: 1; }
    /* Pagination */
    .ideas-pagination { display: flex; justify-content: center; margin: 32px 0 0 0; gap: 6px; }
    .pagination-btn { background: #fff; border: 1px solid #eee; color: #ff6a13; padding: 6px 12px; border-radius: 50%; cursor: pointer; min-width: 32px; font-weight: 500; transition: background 0.2s, color 0.2s; }
    .pagination-btn.active, .pagination-btn:hover { background: #ff6a13; color: #fff; }
    .pagination-ellipsis { padding: 6px 10px; color: #aaa; }
    @media (max-width: 700px) { .ideas-list { padding: 10px; } .cards { gap: 12px; } }
  </style>
</head>
<body>
  <header id="main-header" class="header">
    <div class="container">
      <a href="#" class="logo">suit<span>media</span></a>
      <nav>
        <ul>
          <li><a href="#">Work</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#" class="active">Ideas</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section class="banner">
    <div class="banner-image"></div>
    <div class="banner-text">
      <h1>Ideas</h1>
      <p>Where all our great things begin</p>
    </div>
  </section>
  <main>
    <section class="ideas-list">
      <div class="ideas-controls">
        <div class="left" id="status-text">Loading...</div>
        <div class="right">
          <label for="show-per-page">Show per page:</label>
          <select id="show-per-page">
            <option value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
          </select>
          <label for="sort-by">Sort by:</label>
          <select id="sort-by">
            <option value="-published_at">Newest</option>
            <option value="published_at">Oldest</option>
          </select>
        </div>
      </div>
      <div id="ideas-cards" class="cards"></div>
      <div id="ideas-pagination" class="ideas-pagination"></div>
    </section>
  </main>
  <script>
    // Parallax banner only
    window.addEventListener('scroll', () => {
      const bannerImg = document.querySelector('.banner-image');
      if (bannerImg) {
        bannerImg.style.transform = `translateY(${window.scrollY * 0.3}px)`;
      }
    });
    // Parallax on load
    document.addEventListener('DOMContentLoaded', () => {
      const bannerImg = document.querySelector('.banner-image');
      if (bannerImg) {
        bannerImg.style.backgroundImage = "url('https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=1200&q=80')";
      }
    });
    // State from URL
    function getQuery() {
      const url = new URL(window.location);
      return {
        page: parseInt(url.searchParams.get('page')) || 1,
        size: parseInt(url.searchParams.get('size')) || 10,
        sort: url.searchParams.get('sort') || '-published_at',
      };
    }
    function setQuery({page, size, sort}) {
      const url = new URL(window.location);
      url.searchParams.set('page', page);
      url.searchParams.set('size', size);
      url.searchParams.set('sort', sort);
      window.history.replaceState({}, '', url);
    }
    // Fetch ideas from proxy
    async function fetchIdeas({page, size, sort}) {
        const url = `proxy.php?page[number]=${page}&page[size]=${size}&append[]=small_image&append[]=medium_image&sort=${sort}`;      const res = await fetch(url);
      if (!res.ok) throw new Error('Gagal fetch data');
      return res.json();
    }
    // Render controls
    function renderControls({page, size, sort, total, from, to}) {
      document.getElementById('status-text').textContent = `Showing ${from} - ${to} of ${total}`;
      document.getElementById('show-per-page').value = size;
      document.getElementById('sort-by').value = sort;
    }
    // Render cards
    function getFullImageUrl(img) {
      if (!img) return '';
      // Jika array, ambil elemen pertama
      if (Array.isArray(img) && img.length > 0) {
        return getFullImageUrl(img[0]);
      }
      if (typeof img === 'string') {
        if (img.startsWith('http')) return img;
        return 'https://suitmedia-backend.suitdev.com' + img;
      }
      if (typeof img === 'object' && img.url) {
        if (img.url.startsWith('http')) return img.url;
        return 'https://suitmedia-backend.suitdev.com' + img.url;
      }
      return '';
    }
    function renderCards(items) {
      const cards = document.getElementById('ideas-cards');
      cards.innerHTML = items.map(item => {
        let thumb =
          getFullImageUrl(item.small_image) ||
          getFullImageUrl(item.medium_image) ||
          'https://via.placeholder.com/400x300?text=No+Image';
        return `
          <div class="card">
            <img class="card-thumb" src="${thumb}" alt="${item.title}" loading="lazy" onerror="this.onerror=null;this.src='https://via.placeholder.com/400x300?text=No+Image';" />
            <div class="card-body">
              <div class="card-date">${new Date(item.published_at).toLocaleDateString('id-ID', { day:'numeric', month:'long', year:'numeric' })}</div>
              <div class="card-title">${item.title}</div>
            </div>
          </div>
        `;
      }).join('');
    }
    // Render pagination
    function renderPagination({page, size, total}) {
      const totalPages = Math.ceil(total/size);
      const pag = document.getElementById('ideas-pagination');
      let html = '';
      let range = [];
      for(let i=1; i<=totalPages; i++) {
        if (i === 1 || i === totalPages || Math.abs(i-page)<=2) {
          range.push(i);
        } else if (i === page-3 || i === page+3) {
          range.push('...');
        }
      }
      let last = null;
      range.forEach(i => {
        if (i === '...') {
          if (last !== '...') html += `<span class="pagination-ellipsis">...</span>`;
        } else {
          html += `<button class="pagination-btn${i===page?' active':''}" data-page="${i}">${i}</button>`;
        }
        last = i;
      });
      pag.innerHTML = html;
      pag.querySelectorAll('.pagination-btn').forEach(btn => {
        btn.onclick = e => {
          setQuery({page:parseInt(btn.dataset.page), size, sort:getQuery().sort});
          loadIdeas();
        };
      });
    }
    // Main loader
    async function loadIdeas() {
      const {page, size, sort} = getQuery();
      try {
        const data = await fetchIdeas({page, size, sort});
        renderControls({page, size, sort, total:data.meta.total, from:data.meta.from, to:data.meta.to});
        renderCards(data.data.map(item => ({
          ...item,
          small_image: item.small_image,
          medium_image: item.medium_image,
          title: item.title,
          published_at: item.published_at
        })));
        renderPagination({page, size, total:data.meta.total});
      } catch (e) {
        document.getElementById('status-text').textContent = 'Failed to load ideas.';
        document.getElementById('ideas-cards').innerHTML = '';
        document.getElementById('ideas-pagination').innerHTML = '';
      }
    }
    // Event listeners
    document.getElementById('show-per-page').onchange = e => {
      setQuery({page:1, size:parseInt(e.target.value), sort:getQuery().sort});
      loadIdeas();
    };
    document.getElementById('sort-by').onchange = e => {
      setQuery({page:1, size:getQuery().size, sort:e.target.value});
      loadIdeas();
    };
    // Init
    window.addEventListener('DOMContentLoaded', loadIdeas);
  </script>
</body>
</html>