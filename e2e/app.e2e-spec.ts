import { MapJsonPage } from './app.po';

describe('map-json App', () => {
  let page: MapJsonPage;

  beforeEach(() => {
    page = new MapJsonPage();
  });

  it('should display welcome message', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('Welcome to app!');
  });
});
