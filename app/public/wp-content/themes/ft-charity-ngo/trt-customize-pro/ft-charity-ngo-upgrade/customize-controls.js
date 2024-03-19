(function (api) {
  // Extends our custom "ft-charity-ngo-upgrade" section.
  api.sectionConstructor["ft-charity-ngo-upgrade"] = api.Section.extend({
    // No events for this type of section.
    attachEvents: function () {},

    // Always make the section active.
    isContextuallyActive: function () {
      return true;
    },
  });
})(wp.customize);
